<?php
$access_token = 'IECWvICftD2m9F5X2UCtIKeWXYn5E6X6zxxlvrS/gP5msX7xnsCxqmF7yEO1BSyetXM3EjMY6gqVi3FObND2OcblW87bC7DD4T0+i5hGUzr1Qio45Pw/JAPie8Ycyvl5/QtBQ22/aq/3DPufaHWb0wdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
