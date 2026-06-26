<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Content-Type: application/json; charset=utf-8");

echo json_encode([
    "enabled" => true,
    "title" => "FIFA World Cup 2026™",
    "subtitle" => "United States • Canada • Mexico",
    "description" => "The biggest football event in the world",
    "button_text" => "كل جديد تجدو هنا ",
    "button_action" => "#groups",
    "image" => "https://worldcup2026-main.onrender.com/images/ronaldo.png",
    "background" => "https://worldcup2026-main.onrender.com/images/banner-bg.jpg"
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
