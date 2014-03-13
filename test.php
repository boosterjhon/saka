<?php

define('POSTURL', 'https://www.aski.gov.tr/online_islemler/default.aspx');
define('POSTVARS', 'txt_mail=halo@gmail.comm&txt_mail=asdsads');

$ch = curl_init(POSTURL);
curl_setopt($ch, CURLOPT_POST      ,1);
curl_setopt($ch, CURLOPT_POSTFIELDS    ,POSTVARS.$Email);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION  ,1);
curl_setopt($ch, CURLOPT_HEADER      ,0);  // DO NOT RETURN HTTP HEADERS
curl_setopt($ch, CURLOPT_RETURNTRANSFER  ,1);  // RETURN THE CONTENTS OF THE CALL
$Rec_Data = curl_exec($ch);

var_dump($Rec_Data);



curl_close($ch);
exit();
?>