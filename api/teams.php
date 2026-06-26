<?php

require __DIR__ . '/../includes/bootstrap.php';

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

$teams = [];

foreach (DataService::allMatches() as $match) {

    $t1 = trim($match['team1'] ?? '');
    $t2 = trim($match['team2'] ?? '');

    if ($t1 !== '' && !isset($teams[$t1])) {
        $teams[$t1] = [
            "name"    => $t1,
            "name_ar" => team_name($t1),
            "flag"    => flag_url($t1, "w80")
        ];
    }

    if ($t2 !== '' && !isset($teams[$t2])) {
        $teams[$t2] = [
            "name"    => $t2,
            "name_ar" => team_name($t2),
            "flag"    => flag_url($t2, "w80")
        ];
    }
}

ksort($teams);

echo json_encode(
    array_values($teams),
    JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT
);
