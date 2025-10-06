<?php
require_once '../config.php';
header('Content-Type: application/json; charset=utf-8');

$blockedFile = DATA_DIR . 'blocked_ips.json';

if (!file_exists($blockedFile)) {
    echo json_encode([]);
    exit;
}

$blocked_ips = json_decode(file_get_contents($blockedFile), true);

echo json_encode($blocked_ips ?: []);
?>
