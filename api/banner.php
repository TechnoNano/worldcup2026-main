<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Content-Type: application/json; charset=utf-8");

echo json_encode([
    "enabled" => true,
    "title" => "FIFA World Cup 2026™",
    "subtitle" => "قد يحدث تأخير بسيط في تحديث البيانات بسبب الضغط على الخادم",
    "description" => "United States • Canada • Mexico",
    "button_text" => "كل جديد هنا ومونديال أكثر متعة",
    "button_action" => "#groups",

    // صورة اللاعب
    "image" => "https://f.top4top.io/p_38266h6xx1.png",

    // خلفية البطاقة
    "background" => "https://worldcup2026-main.onrender.com/images/banner-bg.jpg"

], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
