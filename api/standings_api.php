<?php

require_once __DIR__ . '/../includes/bootstrap.php';
require_once __DIR__ . '/../includes/helpers.php';
require_once __DIR__ . '/Standings.php';

header('Content-Type: application/json; charset=utf-8');

echo json_encode(
    Standings::all(),
    JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT
);
