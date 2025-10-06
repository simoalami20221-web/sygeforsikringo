<?php
session_start();
require_once '../config.php';

// Vérifier que l'admin est connecté
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => 'Not authenticated']);
    exit;
}

// Charger les visiteurs
$visitors = json_decode(file_get_contents(VISITORS_FILE), true);

// Mettre à jour le statut (offline si pas vu depuis 30 secondes)
$currentTime = time();
$stats = [
    'total' => count($visitors),
    'online' => 0,
    'waiting' => 0,
    'offline' => 0,
    'blocked' => 0
];

$visitorsList = [];

foreach ($visitors as $ip => $visitor) {
    // Vérifier si le visiteur est offline (pas vu depuis 30 secondes)
    if ($currentTime - $visitor['last_seen'] > 30) {
        $visitor['status'] = 'offline';
    }
    
    // Mettre à jour le statut blocked en temps réel
    $visitor['blocked'] = isIPBlocked($ip);
    
    // S'assurer que current_page existe
    if (!isset($visitor['current_page'])) {
        $visitor['current_page'] = $visitor['page'] ?? 'unknown';
    }
    
    // Compter les statistiques
    if ($visitor['status'] === 'online') $stats['online']++;
    elseif ($visitor['status'] === 'waiting') $stats['waiting']++;
    elseif ($visitor['status'] === 'offline') $stats['offline']++;
    
    if (isset($visitor['blocked']) && $visitor['blocked']) $stats['blocked']++;
    
    $visitorsList[] = $visitor;
}

// Trier les visiteurs : online en premier, puis waiting, puis offline
usort($visitorsList, function($a, $b) {
    $order = ['online' => 1, 'waiting' => 2, 'offline' => 3];
    return $order[$a['status']] - $order[$b['status']];
});

header('Content-Type: application/json');
echo json_encode($visitorsList);
?>
