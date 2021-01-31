<?php
session_start();
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

$dss = extract_from_database_2($connect_info, 'tags', $sss['name_card']);
$_SESSION['a1'] = $dss[0]['id'];
echo $sss['name_card'];
?>


