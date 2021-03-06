<?php
include 'setting.php';
global $connect_info;
// на какие данные рассчитан этот скрипт
header("Content-Type: application/json");
// разбираем JSON-строку на составляющие встроенной командой
$data = json_decode(file_get_contents("php://input"));
//printss($data);
$in_arr = array();
for ($i=0; $i<count($data->Pink); $i++) {
    array_push($in_arr, $data->Pink[$i]);
};
//printss($in_arr);


if (count($in_arr)>0) {
    try {
// Создаем подключение к базе данных
       $db = new PDO('mysql:host = '. $connect_info['host'] .'; dbname=' . $connect_info['dbname'] . '',
            $connect_info['user'], $connect_info['pass']);
        echo 'Подключение к базе данных прошло успешно';
        // Объявляем рабочие массивы
        $out_arr = array();
        $wewe = array();

//=============================================================================
        // Производим выборку уже имеющихся в БД адресов
        $res = $db->query('SELECT url FROM links');
        $res->execute();
        // Представляем выборку в виде массива для удобства работы с ней
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            array_push($wewe, $row['url']);
        }
        // Обнуляем выборку
        $res = null;
//=============================================================================
        // Сравниваем адреса ссылок полученных от клиента с теми что есть в выборке
        // если адрес отсутствует в выборке, то добавляем его в массив для записи в
        // базу данных
        foreach ($in_arr as $w) {
            $f_unic = true;
            foreach ($wewe as $s) {
                if ($w->url==$s) { $f_unic = false; break; }
            }
            if ($f_unic) {array_push($out_arr, $w);}
        }
//=============================================================================
        // Создаем запрос для добавления записи в базу данных
        $STH = $db->prepare("INSERT INTO links (title, url, tag) values (?, ?, ?)");

        if (count($out_arr)>0)  {
            foreach ($out_arr as $s) {
                $ds = array($s->name, $s->url, 1);
                $STH->execute($ds);
            }
        }

    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
else {echo 'От клиента ничего не получено.';}



