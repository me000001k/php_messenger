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
        <link rel="stylesheet" type="text/css" href="css/messages.css">
        <title>Сообщения</title>
    </head>
    <body>
        <h2 class="title-mess">Ваши переписки:</h2>
        <hr>
        <div class="div-mess">
        <ul class="list-mess">
            <span class="top-list">Выберите собеседника:</span>

            <?php foreach ($opponents as $opponent): ?>
                        
            <li class="li-mess"><a href="mess_with.php?opponent=<?=$opponent['users']?>"><?=$opponent['users']?></a></li>            
                                
            <?php endforeach; ?>
            
        </ul>
        </div>
    </body>
</html>
