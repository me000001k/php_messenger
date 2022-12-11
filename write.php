<?php

include_once 'include/header.php';

include_once 'include/functions.php';
check_cookie_1();

include_once 'include/sql_connect.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/write.css">
        <title>Напишите сообщение</title>
    </head>
    <body>
        <h2 class="mes-title">Cообщение пользователю <?=$_GET['req_username']?>:</h2>
        <hr>
        <form class="mes-form" action="scripts/send-script.php?req_username=<?=$_GET['req_username']?>" method="POST">
            <textarea class="mes-write" name="message" placeholder="Введите сообщение..." required></textarea>
            <br>
            <input class="mes-btn" type="submit" value="Отправить">
        </form>
    </body>
</html>
