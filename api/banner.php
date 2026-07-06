<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Content-Type: application/json; charset=utf-8");

echo json_encode([
    "enabled" => true,
    "title" => "FIFA World Cup 2026™",
    "subtitle" => "ستمتع ببطوله المونديال ",
    "description" => "United States • Canada • Mexico",
    "button_text" => "كل جديد هنا",
    "button_action" => "#groups",

    // Player image
    "image" => "https://i.postimg.cc/zvBDnjhc/tsmym-bdwn-ʿnwan.png",

    // Background image
    "background" => "https://worldcup2026-main.onrender.com/images/banner-bg.jpg"

], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
