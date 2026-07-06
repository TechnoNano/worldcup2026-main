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
    ],
    [
        "name" => "Server ",
        "url" => "https://test-streams.mux.dev/x36xhzz/x36xhzz.m3u8"
    ],
    [
        "name" => "Server",
        "url" => "https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
    ]
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
