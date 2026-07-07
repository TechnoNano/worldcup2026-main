<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Content-Type: application/json; charset=utf-8");

echo json_encode([
    [
        "name" => "Server ",
        "url" => "https://player.twitch.tv/?channel=majed92921&muted=false&parent=majed-koora.co"
    ],
    [
        "name" => "Server ",
        "url" => "https://devstreaming-cdn.apple.com/videos/streaming/examples/img_bipbop_adv_example_ts/master.m3u8"

    ]
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
