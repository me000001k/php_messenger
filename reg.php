<?php

include_once 'include/header.php';

include_once 'include/functions.php';
check_cookie_2();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/reg.css">
        <title>Регистрация</title>
    </head>
    <body>
        
        <h1 class="inform">
            Зарегистрируйтесь
        </h1>
        <form class="reg-form" action="scripts/reg-script.php" method="POST">
            <input class="window" type="text" name="username" placeholder="Введите имя" required>
            <br><br>
            <input class="window" type="text" name="login" placeholder="Введите логин" required>
            <br><br>
            <input class="window" type="password" name="password" placeholder="Введите пароль" required>
            <br><br>
            <input class="button" type="submit" value="Готово">
        </form>
        
    </body>
</html>
