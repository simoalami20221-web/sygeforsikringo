<?php
session_start();
require_once '../config.php';

// Vérifier que l'admin est connecté
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => 'Not authenticated']);
    exit;
}

$action = $_GET['action'] ?? 'list';

switch ($action) {
    case 'list':
        // Lire la liste des bots bloqués
        $logFile = '../data/blocked_bots.json';
        $logs = [];
        
        if (file_exists($logFile)) {
            $logs = json_decode(file_get_contents($logFile), true) ?: [];
        }
        
        // Trier par timestamp décroissant (plus récents en premier)
        usort($logs, function($a, $b) {
            return strtotime($b['timestamp']) - strtotime($a['timestamp']);
        });
        
        // Limiter aux 50 derniers
        $logs = array_slice($logs, 0, 50);
        
        header('Content-Type: application/json');
        echo json_encode($logs);
        break;
        
    case 'count':
        // Compter les bots bloqués aujourd'hui
        $logFile = '../data/blocked_bots.json';
        $logs = [];
        
        if (file_exists($logFile)) {
            $logs = json_decode(file_get_contents($logFile), true) ?: [];
        }
        
        $today = date('Y-m-d');
        $todayCount = 0;
        $totalCount = count($logs);
        
        foreach ($logs as $log) {
            if (strpos($log['timestamp'], $today) === 0) {
                $todayCount++;
            }
        }
        
        header('Content-Type: application/json');
        echo json_encode([
            'today' => $todayCount,
            'total' => $totalCount
        ]);
        break;
        
    case 'scan':
        // Lancer un scan manuel des bots
        require_once '../auto_bot_blocker.php';
        $blocked = checkAndBlockBots();
        
        header('Content-Type: application/json');
        echo json_encode([
            'success' => true,
            'blocked_count' => $blocked,
            'message' => "Scan terminé. {$blocked} bots détectés et bloqués."
        ]);
        break;
        
    default:
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'error' => 'Invalid action']);
}
?>
