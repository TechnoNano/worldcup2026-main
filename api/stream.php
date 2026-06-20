<?php

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

$file = __DIR__ . '/../streams.json';

if (!file_exists($file)) {
    echo json_encode([
        "ok" => false,
        "error" => "streams.json not found"
    ]);
    exit;
}

$data = json_decode(file_get_contents($file), true);

echo json_encode([
    "ok" => true,
    "servers" => $data
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
