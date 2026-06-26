<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=utf-8");

require_once __DIR__ . "/data.php";

$data = get_all_matches(); // إذا كانت موجودة عندك
$matches = $data["matches"] ?? [];

$teams = [];

foreach ($matches as $match) {

    if (!empty($match["team1"])) {
        $teams[$match["team1"]] = [
            "name" => $match["team1"],
            "name_ar" => $match["team1_ar"] ?? "",
            "flag" => $match["flag1"] ?? ""
        ];
    }

    if (!empty($match["team2"])) {
        $teams[$match["team2"]] = [
            "name" => $match["team2"],
            "name_ar" => $match["team2_ar"] ?? "",
            "flag" => $match["flag2"] ?? ""
        ];
    }
}

$teams = array_values($teams);

usort($teams, function($a, $b){
    return strcmp($a["name"], $b["name"]);
});

echo json_encode($teams, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);