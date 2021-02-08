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
    <header><?php require_once 'header.php'?></header>
    <context-menu><?php require_once 'contextmenu.php'?></context-menu>
    <main>
        <div id="home" class="view-main"><?php require_once 'main.php'?></div>
        <div class="view-list hidden"></div>
    </main>
</div>
    <script src="js/functions.js"></script>
    <script src="js/fileInput.js"></script>
    <script src="js/cards.js"></script>
    <script src="js/links.js"></script>
    <script src="js/logo.js"></script>
</body>
</html>

