<?php

if (isset($_POST['logout'])){
    setcookie('username', $_COOKIE['username'], time() - 3600 * 24 * 14, '/');
    setcookie('login', $_COOKIE['login'], time() - 3600 * 24 * 14, '/');
    header('Location: http://localhost/messenger/index.php');
    exit();
}
