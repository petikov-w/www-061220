<?php

$data = json_decode(file_get_contents('data.json'),true);
$s1 = 'Это страница списка ссылок на тему "' . $data[0][0]['name_card'] . '"';
unset($data);
?>

<h1><?php echo $s1 ?></h1>
<!--<h1>--><?php //echo $data->name_card; ?><!--</h1>-->