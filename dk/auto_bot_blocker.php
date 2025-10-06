<?php
require_once 'config.php';

// Fonction pour détecter si un visiteur est un bot
function isBotVisitor($userAgent, $ip) {
    $botSignatures = [
        // Bots de moteurs de recherche
        'googlebot', 'bingbot', 'slurp', 'duckduckbot', 'baiduspider', 'yandexbot',
        'facebookexternalhit', 'twitterbot', 'linkedinbot', 'whatsapp', 'telegrambot',
        
        // Bots malveillants
        'bot', 'crawler', 'spider', 'scraper', 'curl', 'wget', 'python', 'java',
        'php', 'perl', 'ruby', 'go-http-client', 'okhttp', 'apache-httpclient',
        
        // Outils automatisés
        'postman', 'insomnia', 'httpie', 'rest-client', 'node-fetch', 'axios',
        'requests', 'urllib', 'libwww', 'lwp', 'mechanize',
        
        // Scanners de sécurité
        'nmap', 'masscan', 'zmap', 'nikto', 'sqlmap', 'burp', 'owasp',
        'nuclei', 'gobuster', 'dirb', 'dirbuster', 'wfuzz',
        
        // Bots de surveillance
        'pingdom', 'uptimerobot', 'statuscake', 'monitor', 'check',
        
        // User agents suspects
        'mozilla/4.0', 'mozilla/3.0', 'compatible;', 'windows nt 5.0',
        'windows 98', 'windows 95'
    ];
    
    $userAgentLower = strtolower($userAgent);
    
    // Vérifier les signatures de bots
    foreach ($botSignatures as $signature) {
        if (strpos($userAgentLower, $signature) !== false) {
            return true;
        }
    }
    
    // Vérifier si l'User-Agent est trop court (suspect)
    if (strlen($userAgent) < 10) {
        return true;
    }
    
    // Vérifier si l'User-Agent est vide
    if (empty($userAgent) || $userAgent === '-') {
        return true;
    }
    
    // Vérifier les IPs de datacenters connus (optionnel)
    $datacenterRanges = [
        '127.0.0.1', // localhost
        '0.0.0.0',   // invalid
    ];
    
    if (in_array($ip, $datacenterRanges)) {
        return true;
    }
    
    return false;
}

// Fonction pour bloquer automatiquement un bot
function autoBlockBot($ip, $userAgent, $reason) {
    // Bloquer l'IP
    blockIP($ip);
    
    // Enregistrer dans le log des bots bloqués
    $logEntry = [
        'timestamp' => date('Y-m-d H:i:s'),
        'ip' => $ip,
        'user_agent' => $userAgent,
        'reason' => $reason,
        'action' => 'auto_blocked'
    ];
    
    $logFile = DATA_DIR . 'blocked_bots.json';
    $logs = [];
    
    if (file_exists($logFile)) {
        $logs = json_decode(file_get_contents($logFile), true) ?: [];
    }
    
    $logs[] = $logEntry;
    
    // Garder seulement les 1000 dernières entrées
    if (count($logs) > 1000) {
        $logs = array_slice($logs, -1000);
    }
    
    file_put_contents($logFile, json_encode($logs, JSON_PRETTY_PRINT));
    
    // Créer aussi un fichier texte simple
    $txtFile = DATA_DIR . 'blocked_bots.txt';
    $txtEntry = "[{$logEntry['timestamp']}] IP: {$ip} | Reason: {$reason} | UA: " . substr($userAgent, 0, 100) . "\n";
    file_put_contents($txtFile, $txtEntry, FILE_APPEND | LOCK_EX);
    
    return true;
}

// Fonction pour vérifier et bloquer les bots automatiquement
function checkAndBlockBots() {
    $visitorsFile = DATA_DIR . 'visitors.json';
    
    if (!file_exists($visitorsFile)) {
        return;
    }
    
    $visitors = json_decode(file_get_contents($visitorsFile), true) ?: [];
    $blockedCount = 0;
    
    foreach ($visitors as $ip => $visitor) {
        // Ignorer si déjà bloqué
        if (isset($visitor['blocked']) && $visitor['blocked']) {
            continue;
        }
        
        $userAgent = $visitor['user_agent'] ?? '';
        
        if (isBotVisitor($userAgent, $ip)) {
            $reason = 'Detected as bot/crawler';
            autoBlockBot($ip, $userAgent, $reason);
            $blockedCount++;
            
            // Mettre à jour le statut dans visitors.json
            $visitors[$ip]['blocked'] = true;
            $visitors[$ip]['auto_blocked'] = true;
            $visitors[$ip]['block_reason'] = $reason;
        }
    }
    
    // Sauvegarder les visiteurs mis à jour
    if ($blockedCount > 0) {
        file_put_contents($visitorsFile, json_encode($visitors, JSON_PRETTY_PRINT));
    }
    
    return $blockedCount;
}

// Si appelé directement, exécuter la vérification
if (basename(__FILE__) === basename($_SERVER['SCRIPT_NAME'])) {
    header('Content-Type: application/json');
    $blocked = checkAndBlockBots();
    echo json_encode(['blocked_count' => $blocked, 'status' => 'success']);
}
?>
