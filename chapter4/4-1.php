<?php
//$appid = "wxbad0b4x543aa0b5e";
$appid = "wx54109120842d46d4";
$appsecret = "a72ffd7a4e4c81c6e45da9218eecdd2e";
$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);  // 10002
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); // 64
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); // 81
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);// 19913
$output = curl_exec($ch);
curl_close($ch);
$jsoninfo = json_decode($output, true);
$access_token = $jsoninfo["access_token"];
?>
