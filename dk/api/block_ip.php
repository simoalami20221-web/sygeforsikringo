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
$action = $data['action'] ?? ''; // 'block' ou 'unblock'

if (empty($ip) || empty($action)) {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => 'Missing parameters']);
    exit;
}

if ($action === 'block') {
    blockIP($ip);
} elseif ($action === 'unblock') {
    unblockIP($ip);
} else {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => 'Invalid action']);
    exit;
}

header('Content-Type: application/json');
echo json_encode(['success' => true]);
?>
