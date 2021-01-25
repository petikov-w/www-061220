<?php
$connect_info = [
    'host'   => 'localhost',
    'dbname' => 'dblinks',
    'user'   => 'root',
    'pass'   => 'root'
];
//include 'functions.php';

//        $dss = extract_from_database($connect_info, 'links', '1');
$dss = extract_from_database($connect_info, 'tags');
$total_count_links = count($dss);
?>

<div class="list-themes">
    <!--        <div class="exs">Проверить</div>-->
    <?php if ($total_count_links > 0) {  ?>
        <?php foreach ($dss as $s) { ?>
<!--            <a href="listlinks.php"><div class="card-theme">--><?php //echo $s['name']; ?><!--</div></a>-->
            <div class="card-theme"><?php echo $s['name']; ?></div>
            <?php
        }
    } ?>
</div>
