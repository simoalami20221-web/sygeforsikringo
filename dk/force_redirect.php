<?php
require_once 'config.php';

// التحقق من البيانات القادمة من الأدمن
if (!isset($_POST['ip']) || !isset($_POST['page'])) {
    header('Content-Type: application/json');
    echo json_encode(['status' => 'error', 'message' => 'Missing data']);
    exit;
}

$ip = $_POST['ip'];
$page = $_POST['page'];
$file = __DIR__ . '/data/force_' . md5($ip) . '.signal';

// تسجيل التوجيه المطلوب
if (strpos($page, '.php') === false) {
    $page .= '.php';
}
file_put_contents($file, $page);


// ردّ JSON ناجح بدون أي refresh
header('Content-Type: application/json');
echo json_encode(['status' => 'ok', 'redirect' => $page]);
exit;
?>
