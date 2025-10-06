<?php
require_once '../config.php';

$ip = getVisitorIP();
$redirect = getRedirectForIP($ip);

header('Content-Type: application/json');
echo json_encode([
    'redirect' => $redirect
]);
?>
