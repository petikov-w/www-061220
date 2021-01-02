<?php

// на какие данные рассчитан этот скрипт
header("Content-Type: application/json");
// разбираем JSON-строку на составляющие встроенной командой
$data = json_decode(file_get_contents("php://input"));
// отправляем в ответ строку с подтверждением
//echo "Сервер получил следующие данные: имя — $data->name, фамилия — $data->lastname";
//echo $data->name;
//echo $data->url;
//printss($data);

printss($data->websites[2]->name).'<br>'. printss($data->websites[2]->url);

$user = 'root';
//$pass = '';
$pass = 'root';



try {
 $db = new PDO('mysql:host = localhost; dbname=dblinks', $user, $pass);
 echo 'Подключение к базе данных прошло успешно';

    $STH = $db->query('SELECT url FROM links');
  //  $l_records = $res->fetch(PDO::FETCH_ASSOC);


    $STH = $db->prepare("INSERT INTO links (title, url) values (?, ?)");

    # набор данных, которые мы будем вставлять
    $data = array($data->websites[2]->name, $data->websites[2]->url);

    $STH = $db->prepare("INSERT INTO links (title, url) values (?, ?)");
    $STH->execute($data);
} catch (Exception $e) {
  echo $e->getMessage();
}




// Функция для отладки
function printss($source) {
    echo "<pre style='font-size: 16px; 
                      color: #f52e14;
                      font-weight: 500'>";
    print_r($source);
    echo "</pre>";
}
