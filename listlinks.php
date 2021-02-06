<?php
include 'functions.php';
include 'setting.php';
global $connect_info;

// На какие данные рассчитан этот скрипт
header("Content-Type: application/json");
// Получаем данные от страницы

$sss = json_decode(file_get_contents("php://input"),true);

$fcv = [
    'field' => 'name',
    'condition' => '=',
    'value' => $sss['name_card']
];

$dss = extract_from_database_2($connect_info, 'tags', $fcv);

$fcv = [
    'field' => 'tag',
    'condition' => '=',
    'value' => $dss[0]['id']
];

echo create_json(extract_from_database_2($connect_info, 'links', $fcv));




