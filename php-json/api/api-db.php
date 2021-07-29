<?php
include_once __DIR__ . '/../database/db.php';

header('Content-Type: application/json');
echo json_encode($songs);