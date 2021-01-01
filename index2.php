<?php

// на какие данные рассчитан этот скрипт
header("Content-Type: application/json");
// разбираем JSON-строку на составляющие встроенной командой
$data = json_decode(file_get_contents("php://input"));
// отправляем в ответ строку с подтверждением
//echo "Сервер получил следующие данные: имя — $data->name, фамилия — $data->lastname";
//echo $data->name;
//echo $data->url;
printss($data);

printss($data->websites[1]->name);


// Функция для отладки
function printss($source) {
    echo "<pre style='font-size: 16px; 
                      color: #f52e14;
                      font-weight: 500'>";
    print_r($source);
    echo "</pre>";
}
