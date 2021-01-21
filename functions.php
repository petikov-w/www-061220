<?php

function vist2_condition($table, $condition) {
    try {
// Создаем подключение к базе данных
        $user = 'root';
        $pass = 'root';
        $db = new PDO('mysql:host = localhost; dbname=dblinks', $user, $pass);
        //echo 'Подключение к базе данных прошло успешно';
        // Объявляем рабочие массивы
        $wewe = array();
//=============================================================================
        // Производим выборку уже имеющихся в БД адресов
        $res = $db->query('SELECT * FROM ' . $table. ' WHERE tag=' . $condition . '');
        //$res->execute();
        $wewe = $res-> fetchAll();
        // Обнуляем выборку
        $res = null;
//=============================================================================
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    return $wewe;
}

function vist2($table) {
    try {
// Создаем подключение к базе данных
        $user = 'root';
        $pass = 'root';
        $db = new PDO('mysql:host = localhost; dbname=dblinks', $user, $pass);
        //echo 'Подключение к базе данных прошло успешно';
        // Объявляем рабочие массивы
        $wewe = array();
//=============================================================================
        // Производим выборку уже имеющихся в БД адресов
        $res = $db->query('SELECT * FROM ' . $table. ' WHERE tag=1');
        //$res->execute();
        $wewe = $res-> fetchAll();
        // Обнуляем выборку
        $res = null;
//=============================================================================
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    return $wewe;
}


function vist() {
    try {
// Создаем подключение к базе данных
        $user = 'root';
        $pass = 'root';
        $db = new PDO('mysql:host = localhost; dbname=dblinks', $user, $pass);
        //echo 'Подключение к базе данных прошло успешно';
        // Объявляем рабочие массивы
        $out_arr = array();
        $wewe = array();

//=============================================================================
        // Производим выборку уже имеющихся в БД адресов
        $res = $db->query('SELECT title FROM links');
        $res->execute();
        // Представляем выборку в виде массива для удобства работы с ней
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            array_push($wewe, $row['title']);
        }
        // Обнуляем выборку
        $res = null;
//=============================================================================


    } catch (Exception $e) {
        echo $e->getMessage();
    }
    return $wewe;
}


// Функция для отладки
function printss($source) {
    echo "<pre style='font-size: 16px; 
                      color: #f52e14;
                      font-weight: 500'>";
    print_r($source);
    echo "</pre>";
}