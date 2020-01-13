<?php

$text = filter_var(getenv('POPCLIP_TEXT'), FILTER_VALIDATE_IP);
// $text = '1.2.4.8';
$http = 'http://ip.taobao.com/service/getIpInfo.php?ip='.$text;

$json = file_get_contents($http);
// $curl = curl_init();
// curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
// // curl_setopt($curl, CURLOPT_HEADER, 0);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($curl, CURLOPT_URL, $http);
// // curl_setopt($curl, CURLOPT_USERAGENT, 'curl/');
// $json = curl_exec($curl);
$info = json_decode($json);
// $stat = curl_getinfo($curl, CURLINFO_HTTP_CODE);
// if($stat != '200') exit('');
// curl_close($curl);

// if(empty($info->data)) exit('api return null');
echo $info->data->country,
	 $info->data->area,
	 $info->data->city,
	 $info->data->county,
	 $info->data->isp;
exit;
