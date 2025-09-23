<?php
$botToken = "8200985095:AAG-b0ELKekws1uDftPKaidvwuZ9xYf6B64;
$chatId = "-4872213119;
$message = "اختبار من InfinityFree 🚀";

$url = "https://api.telegram.org/bot$botToken/sendMessage";

$params = [
    "chat_id" => $chatId,
    "text" => $message
];

$options = [
    "http" => [
        "header"  => "Content-type: application/x-www-form-urlencoded\r\n",
        "method"  => "POST",
        "content" => http_build_query($params),
    ],
];

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

if ($result === FALSE) {
    echo "فشل الاتصال 😢";
} else {
    echo "تم الإرسال ✅<br>";
    echo $result;
}
?>
