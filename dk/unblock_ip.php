<?php
require_once 'config.php';
header('Content-Type: application/json; charset=utf-8');

if (!isset($_POST['ip']) || trim($_POST['ip']) === '') {
    echo json_encode(['status' => 'error', 'message' => 'IP missing']);
    exit;
}

$ip = trim($_POST['ip']);
unblockIP($ip);

echo json_encode(['status' => 'ok', 'unblocked_ip' => $ip]);
exit;
?>
