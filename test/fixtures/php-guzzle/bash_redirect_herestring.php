<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->post('http://localhost:28139/api/servers/00000000000/shared_servers/', [
    'headers' => [
        "'Accept'"      => "'application/json'",
        'Authorization' => 'Bearer 000000000000000-0000',
        'Content-Type'  => 'application/json'
    ],
    'body' => '$MYVARIABLE'
]);
