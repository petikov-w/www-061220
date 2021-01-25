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
<?php include 'functions.php'; ?>
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
        <div id="home" class="view-main"><?php include 'main.php'?></div>
        <div class="view-list hidden"><?php include 'listlinks.php'?></div>


    </main>
</div>
<!--    <script src="js/ajax.js"></script>-->
    <script src="js/functions.js"></script>
    <script src="js/fileInput.js"></script>
<!--    <script src="js/resp.js"></script>-->
    <script src="js/cards.js"></script>
    <script src="js/logo.js"></script>
</body>
</html>
