<?php

require __DIR__ . '/vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$response = $client->request("GET", "https://anapioficeandfire.com/api/characters/583");

$body = json_decode($response->getBody());
$name = $body->name;
$alias = $body->aliases[0];

echo "Hello, ${name}! Also known as ${alias}.";
