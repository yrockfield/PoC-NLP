<?php
header('Access-Control-Allow-Origin: ' . $_SERVER['SERVER_NAME']);

// Azure上で作成した Translatorサービスのサブスクリプションキーを設定する
$subscriptionKey = '5020169e39b8452e85789444cc0c951e';
$region = 'japaneast';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://' . $region . '.api.cognitive.microsoft.com/sts/v1.0/issueToken');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{}');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Ocp-Apim-Subscription-Key: ' . $subscriptionKey)); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
echo curl_exec($ch);
?>
