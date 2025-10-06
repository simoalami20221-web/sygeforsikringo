<?php
require_once '../config.php';

$ip = getVisitorIP();
$page = $_GET['page'] ?? 'unknown';

// Déterminer le statut basé sur la page
$status = 'online';
if ($page === 'page3') {
    $status = 'waiting';
}

updateVisitorStatus($ip, $page, $status);

header('Content-Type: application/json');
echo json_encode(['success' => true]);
?>
