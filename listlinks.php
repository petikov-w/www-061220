<?php
if (isset($_POST['u_name']))
{
    echo $_POST['u_name'] . '</p>';
}


$s1 = 'Это страница списка ссылок на тему "' . $vff . '"';


//print_r($data->name_card);

?>

<h1><?php echo $s1 ?></h1>
<!--<h1>--><?php //echo $data->name_card; ?><!--</h1>-->