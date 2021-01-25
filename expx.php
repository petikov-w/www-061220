<?php

//$west = $_POST['juja'];
//$sss = json_decode($west);
//printss($_POST);
//$result = $west . ' ответ с сервера!';
//echo json_encode($result);
include 'functions.php';

header("Content-Type: application/json");
// разбираем JSON-строку на составляющие встроенной командой
$data = json_decode(file_get_contents("php://input"));
// отправляем в ответ строку с подтверждением
//echo json_decode($data);
//session_start();


//printss($_SESSION['name_card']);
//if ($data->name_card == '') { echo 'ooooooooooooooo';}
//echo "Сервер получил следующие данные: mas — $data->mas, pas — $data->pas";

if ($data->name_card !== '') {echo '---> ' . $data->name_card; }
    else {echo 'Ничего не получено...';}