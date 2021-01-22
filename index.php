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
        $connect_info = [
            'host'   => 'localhost',
            'dbname' => 'dblinks',
            'user'   => 'root',
            'pass'   => 'root'
        ];
        include 'functions.php';

//        $dss = extract_from_database($connect_info, 'links', '1');
        $dss = extract_from_database($connect_info, 'tags');
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
        <div class="list-themes">
            <!--        <div class="exs">Проверить</div>-->
            <?php if ($total_count_links > 0) {  ?>
                <?php foreach ($dss as $s) { ?>
                    <div class="card-theme"><?php echo $s['name']; ?></div>
                    <?php
                }
            } ?>
        </div>

    </main>
</div>
    <script src="js/ajax.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/fileInput.js"></script>
    <script src="js/resp.js"></script>
    <script src="js/cards.js"></script>
</body>
</html>
