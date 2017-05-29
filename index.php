<?php
$access_token = 'ZoHM+njF7Tof4LQ8zcTG2pz/qKeehbsrg6UwRlxi0tSGPdCHGlIlhOG/9SlcNzXDC9EcTCPTGaHqC25D9aEVoaitkX6CDO/Vziamg0s+BZcTv6I5K7LPmnliqWPCcaR8EhPooDU/kfEAeOnPgjizVwdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
