<?php

function extract_from_database_2($connect, $table, $condition=false) {
    try {
// Создаем подключение к базе данных
        $db = new PDO('mysql:host = '. $connect['host'] .'; dbname=' . $connect['dbname'] . '',
            $connect['user'], $connect['pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        //echo 'Подключение к базе данных прошло успешно';
        // Объявляем рабочие массивы
        $result = array();
//=============================================================================
        // Производим выборку уже имеющихся в БД адресов
        if ($condition) {
//            $res = $db->query('SELECT * FROM ' . $table. ' WHERE ' . $condition . '');
            $res = $db->query('SELECT * FROM ' . $table. ' WHERE name=' . '"'. $condition .'"'. '');
        } else {
            $res = $db->query('SELECT * FROM ' . $table. '');
        }

        //$res->execute();
        $result = $res-> fetchAll();
//        $result = $res-> fetchAll();
        // Обнуляем выборку
        $res = null;
//=============================================================================
    } catch (Exception $e) {
        echo $e->getMessage();
        //echo '==========';
    }
    return $result;
}


function extract_from_database($connect, $table, $condition=false) {
    try {
// Создаем подключение к базе данных
        $db = new PDO('mysql:host = '. $connect['host'] .'; dbname=' . $connect['dbname'] . '',
                                       $connect['user'], $connect['pass']);
        //echo 'Подключение к базе данных прошло успешно';
        // Объявляем рабочие массивы
        $result = array();
//=============================================================================
        // Производим выборку уже имеющихся в БД адресов
        if ($condition) {
            $res = $db->query('SELECT * FROM ' . $table. ' WHERE tag=' . $condition . '');
        } else {
            $res = $db->query('SELECT * FROM ' . $table. '');
        }

        //$res->execute();
        $result = $res-> fetchAll();
        // Обнуляем выборку
        $res = null;
//=============================================================================
    } catch (Exception $e) {
        echo $e->getMessage();
        //echo '==========';
    }
    return $result;
}


// Функция для отладки
function printss($source) {
    echo "<pre style='font-size: 16px; 
                      color: #f52e14;
                      font-weight: 500'>";
    print_r($source);
    echo "</pre>";
}