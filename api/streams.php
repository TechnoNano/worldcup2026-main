<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Content-Type: application/json; charset=utf-8");

echo json_encode([
    [
        "name" => "مباراه العراق HD",
        "url" => "https://ligspain2.blogspot.com/"
    ],
    [
        "name" => "مباراه العراق 2",
        "url" => "https://player.twitch.tv/?channel=falahhkr1&muted=false&parent=majed-koora.live"
    ],
    [
        "name" => "مباراه فرنساHD",
        "url" => "https://example.com/server3"
    ],
    [
        "name" => "مباراه فرنسا 2",
        "url" => "https://example.com/server4"
    ]
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);