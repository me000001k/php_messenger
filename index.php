<?php

include_once 'include/header.php';

include_once 'include/functions.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <title>Добро Пожаловать!</title>
    </head>
    <body>

        <?php if (empty($_COOKIE['username'])): ?>
        
        <h1 class="greeting">
            <a href="reg.php">Зарегистрируйтесь</a> или <a href="login.php">Войдите.</a>
        </h1>
        
        <?php endif; ?>
        <?php if (isset($_COOKIE['username'])): ?>
        
        <h1 class="greeting">
            Здравствуйте, <?=$_COOKIE['username']?>!
        </h1>
        <p class="mess-link">
            Перейти в <a href="messages.php">сообщения.</a>
        </p>
        
        <br>
        
        <form class="logout-form" action="scripts/logout-script.php" method="POST">
            <input class="logout-btn" type="submit" value="Выйти" name="logout">
        </form>
        
        <?php endif; ?>
        
    </body>
</html>
