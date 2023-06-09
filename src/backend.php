<?php
header('Access-Control-Allow-Origin: *');


$jsonFile = '../data/objects.json';
$data = file_get_contents($jsonFile);

$jsonData = json_decode($data, true);


header('Content-Type: application/json');
echo json_encode($jsonData);
