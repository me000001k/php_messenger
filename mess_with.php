<?php

include_once 'include/header.php';

include_once 'include/functions.php';
check_cookie_1();

include_once 'include/sql_connect.php';

header('Refresh: 30');

?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/mess_with.css">
        <title>Общение с <?=$_GET['opponent']?></title>
    </head>
    <body>
        <h2 class="title-mess">Переписка с <?=$_GET['opponent']?>:</h2>
        <hr>
        
        <form class="mes-form" action="scripts/fast-send.php?req_username=<?=$_GET['opponent']?>" method="POST">
            <textarea class="mes-write" name="message" placeholder="Введите сообщение..." required></textarea>
            <br>
            <input class="mes-btn" type="submit" value="Отправить">
        </form>
        
        <ul class="list-mess">
            
        <?php
        
        $username = $_COOKIE['username'];
        $opponent = $_GET['opponent'];
        
        $messages = mysqli_fetch_all(mysqli_query($link, "SELECT sender_username, message, time FROM messages WHERE sender_username = '$username' AND recipient_username = '$opponent' OR sender_username = '$opponent' AND recipient_username = '$username' ORDER BY time DESC;"), MYSQLI_ASSOC);
        
        foreach ($messages as $mess) {
            
            if ($mess['sender_username'] === $username) {
                
                echo '<li class="one-mess"><span class="owner">Вы:</span><br><span class="message">'.$mess['message'].'</span><br><span class="time">'.$mess['time'].'</span></li><br>';
                
            } else {
            
            echo '<li class="one-mess"><span class="sender">'.$mess['sender_username'].':'.'</span><br><span class="message">'.$mess['message'].'</span><br><span class="time">'.$mess['time'].'</span></li><br>';
            
            }
        }
        
        ?>
            
        </ul>
        
    </body>
</html>

