<?php
$west = $_POST['west'];
$result = $west . ' ответ с сервера!';
echo json_encode($result);