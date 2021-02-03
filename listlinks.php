<?php
include 'functions.php';

$connect_info = [
    'host' => 'localhost',
    'dbname' => 'dblinks',
    'user' => 'root',
    'pass' => 'root'
];


// на какие данные рассчитан этот скрипт
header("Content-Type: application/json");
// 1. Получаем данные от страницы

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
$dss2 = extract_from_database_2($connect_info, 'links', $fcv);
//printss($dss2);
//printss(count($dss2));
$dss3 = create_json($dss2);
//printss($dss3);
$s1 = $dss3;

//$s1 = 'Это страница списка ссылок на тему "<span class="cat"> ' . $sss['name_card'] . ' </span>"';
echo $s1;
?>



