<?php
	date_default_timezone_set('Asia/Kolkata');
	$date=date("Y-m-d h:i:s:A");
	$data = $_REQUEST['send_data'];
	$fl = fopen("log.txt", "a");
	$finalData = "\r\nDate: $date \r\nData: $data\r\n--------------------------------------------------------------------------------------";
	fwrite($fl, $finalData);
	$redirect = trim($_SERVER['SERVER_NAME']);
	header("Location:http://$redirect");
	fclose($fl);
?>