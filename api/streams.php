<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Content-Type: application/json; charset=utf-8");

echo json_encode([
    [
        "name" => "Server ",
        "url" => "https://player.twitch.tv/?channel=koora1111212&muted=false&parent=www.majed-koora.com"
    ],
    [
        "name" => "Server ",
        "url" => "https://player.twitch.tv/?channel=1jul01&enableExtensions=true&muted=false&parent=twitch.tv&player=popout&quality=auto&volume=0.5"

    ]
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
