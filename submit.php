<?php
$from = $_GET['from'];
$email = $_GET['email'];
$name = $_GET['name'];
$phone = $_GET['phone'];
$message = $_GET['message'];
$cURLConnection = curl_init();

$url = 'https://verseashop.com/ajax_contact.php?from='.$from.'&name='.$name.'&email='.$email.'&phone='.$phone.'&message='.$message;
curl_setopt($cURLConnection, CURLOPT_URL, $url);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($cURLConnection);
curl_close($cURLConnection);
echo 'true';
exit;