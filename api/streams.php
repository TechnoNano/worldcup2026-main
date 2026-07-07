<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Content-Type: application/json; charset=utf-8");

$servers = [

    [
        "id" => 1,
        "name" => "Server 1",
        "type" => "twitch",
        "quality" => "Auto",
        "default" => true,
        "url" => "https://test-streams.mux.dev/x36xhzz/x36xhzz.m3u8"
    ],

    [
        "id" => 2,
        "name" => "Server 2",
        "type" => "hls",
        "quality" => "1080p",
        "default" => false,
        "url" => "https://devstreaming-cdn.apple.com/videos/streaming/examples/img_bipbop_adv_example_ts/master.m3u8"
    ],

    [
        "id" => 3,
        "name" => "Server 3",
        "type" => "hls",
        "quality" => "720p",
        "default" => false,
        "url" => "https://test-streams.mux.dev/x36xhzz/x36xhzz.m3u8"
    ],

    [
        "id" => 4,
        "name" => "Server 4",
        "type" => "mp4",
        "quality" => "HD",
        "default" => false,
        "url" => "https://download.samplelib.com/mp4/sample-20s.mp4"
    ]

];

echo json_encode($servers, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
