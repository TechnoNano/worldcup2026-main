<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Content-Type: application/json; charset=utf-8");

echo json_encode([
    [
        "name" => "Server 1",
        "url" => "https://player.twitch.tv/?channel=majed92921&muted=false&parent=majed-koora.co"
    ],
    [
        "name" => "Server 2",
        "url" => "https://majed-koora.co/stream.php?channel=majed92921&file=stream.m3u8"
    ],
    [
        "name" => "Server 3",
        "url" => "https://majed-koora.co/stream.php?channel=majed92921&file=stream.m3u8"
    ],
    [
        "name" => "Server 4",
        "url" => "https://player.twitch.tv/?channel=majed92921&enableExtensions=true&muted=false&parent=twitch.tv&player=popout&quality=auto&volume=0.5"
    ]
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
