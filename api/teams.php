<?php

require __DIR__ . '/../includes/bootstrap.php';

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

$teams = [];

foreach (Standings::all() as $group => $rows) {

    foreach ($rows as $team) {

        $name = trim($team['team']);

        if (!isset($teams[$name])) {

            $teams[$name] = [
                "name"    => $name,
                "name_ar" => team_name($name),
                "flag"    => flag_url($name, "w80")
            ];

        }

    }

}

ksort($teams);

echo json_encode(
    array_values($teams),
    JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT
);
