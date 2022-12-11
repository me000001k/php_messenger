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
        <link rel="stylesheet" type="text/css" href="css/users.css">
        <title>Все пользователи</title>
    </head>
    <body>
        <div class="users-list">
        <h2 class="title-users">
            Все пользователи:
        </h2>
        <br>
        <div class="users">
            <ul>
                
                <?php foreach($all_usernames as $user): ?>
                
                <li><span class="username"><?php if ($user['username'] === $_COOKIE['username']){ echo null; } else { echo $user['username']; } ?></span></li> <?php if ($user['login'] === $_COOKIE['login']) { echo null; } else { echo '<a href="write.php?req_username='.$user['username'].'"><span class="write">Написать</span></a>'; } ?>
                
                <?php endforeach; ?>
                
            </ul>
        </div>
        </div>
    </body>
</html>
