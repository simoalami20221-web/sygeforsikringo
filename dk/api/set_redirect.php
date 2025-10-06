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
    echo json_encode(['success' => false, 'error' => 'Missing parameters', 'received' => $data]);
    exit;
}

// Définir la redirection immédiate
setRedirectForIP($ip, $page);

// Forcer la redirection en créant un fichier temporaire pour ce visiteur
$forceFile = '../data/force_redirect_' . md5($ip) . '.txt';
file_put_contents($forceFile, $page . '.php');

header('Content-Type: application/json');
echo json_encode(['success' => true, 'message' => 'Redirection set for IP: ' . $ip . ' to page: ' . $page]);
?>
