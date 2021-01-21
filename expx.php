<?php
//$west = $_POST['juja'];
//$sss = json_decode($west);
//printss($_POST);
//$result = $west . ' ответ с сервера!';
//echo json_encode($result);


header("Content-Type: application/json");
// разбираем JSON-строку на составляющие встроенной командой
$data = json_decode(file_get_contents("php://input"));
// отправляем в ответ строку с подтверждением
echo json_decode($data);
//echo "Сервер получил следующие данные: mas — $data->mas, pas — $data->pas";

if ($data->pas == 'Пока') {echo 'Досвидания';}
    else {echo '---------';}