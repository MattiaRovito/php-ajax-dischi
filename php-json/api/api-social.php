<?php
include_once __DIR__ . '/../database/social.php';

header('Content-Type: application/json');
echo json_encode($socials);