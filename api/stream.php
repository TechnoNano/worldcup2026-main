<?php

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

$matchId = $_GET['match'] ?? '';

if (!$matchId) {
    echo json_encode([
        "ok" => false,
        "error" => "Missing match parameter"
    ]);
    exit;
}

$file = __DIR__ . '/../streams.json';

if (!file_exists($file)) {
    echo json_encode([
        "ok" => false,
        "error" => "streams.json not found"
    ]);
    exit;
}

$data = json_decode(file_get_contents($file), true);

$servers = $data[$matchId] ?? [];

echo json_encode([
    "ok" => true,
    "servers" => $servers
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);