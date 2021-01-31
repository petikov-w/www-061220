<?php
//session_start();
print_r($_SESSION);
$a1 = $_SESSION['a1'];
$s1 = 'Это страница списка ссылок на тему "' . $a1 . '"';
echo $a1;
?>

<h1><?php echo $s1 ?></h1>
