<?php

$text = filter_var(getenv('POPCLIP_TEXT'), FILTER_VALIDATE_IP);
// $text = '1.2.4.8';
// if(empty($text)) exit('empty');
$http = 'http://ip.cn/index.php?ip='.$text;

// get ip info from ip.cn
$curl = curl_init();
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_URL, $http);
curl_setopt($curl, CURLOPT_USERAGENT, 'curl/');
$html = curl_exec($curl);
$stat = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);
// if($stat != '200') exit('');
echo $html; exit;
