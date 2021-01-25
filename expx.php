<?php

// на какие данные рассчитан этот скрипт
header("Content-Type: application/json");
// 1. Получаем данные от страницы
$data = json_decode(file_get_contents("php://input"));
// 2. Проверяем, есть ли на сервере нужный нам файл с данными — json.data.
// Берём новую переменную и пишем в неё имя файла
$filename = 'data.json';
// 3. Если есть — запоминаем его содержимое, а если такого файла нет — создаём его отдельной командой.
if (file_exists($filename)) {
    // Если файл есть — открываем его и читаем данные
    $file = fopen("data.json", "w+");

    fwrite($file, $data);
    fclose($file);



    //$file = file_get_contents('data.json');
    // Если такого файла нет…
} else {
// …то создаём его сами
    $file = fopen("data.json", "w+");
}
// 4/ Всё, что было в этом файле, переводим в массив, с которым умеет работать PHP. Таким способом у нас каждая JSON-запись будет храниться в отдельной ячейке массива.
$taskList = json_decode($file, true);
// 5. Добавляем новую запись в этот массив — кладём в него то, что пришло со страницы.
$taskList[] = array($data);
// 6. Записываем это всё обратно в файл и тут же читаем обратно из него — так мы убедимся, что запись прошла нормально и мы можем с этим работать.
// Записываем данные в файл…
file_put_contents('data.json', json_encode($taskList));
// …и сразу считываем их обратно
$file = file_get_contents('data.json'); // Открыть файл data.json
// 7. Отправляем всё содержимое файла на страницу, чтобы там увидеть, что сервер работает как нужно.
echo $file;
// Освобождаем память от переменных, которые нам пока не нужны
unset($file);
unset($taskList);








//======================================================================
//include 'functions.php';

//header("Content-Type: application/json");
// разбираем JSON-строку на составляющие встроенной командой
//$data = json_decode(file_get_contents("php://input"));
// отправляем в ответ строку с подтверждением
//echo json_decode($data);
//session_start();


//printss($_SESSION['name_card']);
//if ($data->name_card == '') { echo 'ooooooooooooooo';}
//echo "Сервер получил следующие данные: mas — $data->mas, pas — $data->pas";

//if ($data->name_card !== '') {echo '---> ' . $data->name_card; }
//    else {echo 'Ничего не получено...';}
//========================================================================