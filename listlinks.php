<?php
session_start();
$xxx = $_SESSION['xxx'];
printss($xxx);
//$data = json_decode(file_get_contents('data.json'),true);
$file = fopen("data.json", "r");
$contents = fread($file, filesize("data.json"));
fclose($file);
$data = json_decode($contents, true);

//printss($contents);
//printss($data);
//printss($data[0][0]['name_card']);
$s1 = 'Это страница списка ссылок на тему "' . $data[0][0]['name_card'] . '"';
unset($data);
?>

<h1><?php echo $s1 ?></h1>
<!--<h1>--><?php //echo $data->name_card; ?><!--</h1>-->