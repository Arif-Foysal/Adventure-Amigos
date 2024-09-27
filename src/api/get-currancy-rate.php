<?php
header('Content-Type: application/json');
require '../../vendor/autoload.php';
Use GuzzleHttp\Client;
$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://v6.exchangerate-api.com/v6/04267df24bea3204808b8ae8/latest/USD', [
    'auth' => ['user', 'pass']
    ]);
    
// "200"
// echo $res->getHeader('content-type')[0];
// 'application/json; charset=utf8'

echo $res->getBody();
// echo json_decode( $res->getBody());
// echo $result['INR'];
// echo $respond['INR'];


?>
