<?php
//session_start();
include 'functions.php';
// на какие данные рассчитан этот скрипт
header("Content-Type: application/json");
// 1. Получаем данные от страницы
$sss = json_decode(file_get_contents("php://input"),true);
//$_SESSION['name_card'] = $sss['name_card'];
$GLOBALS['name_card'] = $sss['name_card'];
echo $sss['name_card'];


