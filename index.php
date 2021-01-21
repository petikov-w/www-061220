<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Копилка ссылок</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">
<!--    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    include 'functions.php';
    $hhh = ['title','url'];
//    $dss = vist2($hhh,'links');
    $dss = vist2_condition('links', '1');
    $total_count_links = count($dss);
?>
<div class="container">
    <header>
        <div class="logo-box">
            <svg width="50" height="50" class="icon icon-w" >
                <use xlink:href="/images/sprite.svg#tags"></use>
            </svg>
            <div class="logo">Копилка ссылок <span>на полезные ресурсы</span></div>
        </div>

        <input type="file" id="file-input" accept=".url" class="inputfile" multiple/>
        <label for="file-input" class="input-button">
                <span class="if-button">Добавить ссылки</span>
        </label>
        <span class="info-button hidden"></span>
    </header>
    <main>
        <div class="total">Всего ссылок в копилке: <?php echo $total_count_links; ?></div>
<!--        <div class="exs">Проверить</div>-->

<!--    --><?php // printss($dss);?>
    <?php foreach ($dss as $s) { ?>
        <a href="<?php echo $s['url']; ?>"><div><?php echo $s['title']; ?></div></a>
    <?php
//        printss($s['title']);
    } ?>
    </main>
</div>
    <script src="js/ajax.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/fileInput.js"></script>
    <script src="js/resp.js"></script>
</body>
</html>
