<?php
define("ZDAPIKEY", "UCsOQ3ZS7EUJtH9z23TA64RmqXQLxZ4KFjbHprzW");
define("ZDUSER", "bob.bohanek@uroomtech.com");
define("ZDURL", "https://mediafusionapp.zendesk.com/api/v2");
if( ini_get('safe_mode') ){
   echo 'Safe Mode' . PHP_EOL;
}else{
   echo 'Safe Mode OFF' . PHP_EOL;
}
exec('php subscribe.php');
function curlWrap($url, $json, $action)
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_MAXREDIRS, 10 );
	curl_setopt($ch, CURLOPT_URL, ZDURL.$url);
	curl_setopt($ch, CURLOPT_USERPWD, ZDUSER."/token:".ZDAPIKEY);
	switch($action){
		case "POST":
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
			break;
		case "GET":
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
			break;
		case "PUT":
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
			curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
		default:
			break;
	}
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));	curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	$output = curl_exec($ch);
	echo 'Curl output: ' . curl_error($ch);
	curl_close($ch);
	$decoded = json_decode($output);
	return $decoded;
}
$myFile = "tickets.csv";
$fh = fopen($myFile, 'w');
date_default_timezone_set('UTC');
$time = strtotime("-17520 hours");
$decoded = curlWrap("/exports/tickets.json?start_time=".$time, null, "GET");
$first = $decoded->results[0];
$first = (array) $first;
$keys = array_keys($first);
fputcsv($fh, $keys, ",", "\"");
foreach($decoded->results as $result){
     $result = (array) $result;
     fputcsv($fh, $result, ",", "\"");
}
fclose($fh);
?>