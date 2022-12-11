<?php

if ($_GET['cat_id'] === '1') {
    
    header('Location: http://localhost/messenger/messages.php');
    exit();
    
} elseif ($_GET['cat_id'] === '2') {
    
    header('Location: http://localhost/messenger/users.php');
    exit();
    
}
