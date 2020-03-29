<?php
//header('Access-Control-Allow-Origin: ' . $_SERVER['SERVER_NAME']);

// Azure上で作成した Translatorサービスのサブスクリプションキーを設定する
$subscriptionKey = 'b08d1ef4101d41fcb7f2f2ee96fd9039';
$region = 'japaneast';

$ch = curl_init();
// Azure上で作成した Translatorサービスのエンドポイントを設定する
curl_setopt($ch, CURLOPT_URL, 'https://systemthink-tech-translate-poc.cognitiveservices.azure.com/sts/v1.0/issuetoken');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{}');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Ocp-Apim-Subscription-Key: ' . $subscriptionKey)); 
// curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Ocp-Apim-Subscription-Key: ' . $subscriptionKey, 'Ocp-Apim-Subscription-Region: ' . $region )); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
echo curl_exec($ch);
?>
