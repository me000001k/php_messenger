<?php

include_once '../include/functions.php';

include_once '../include/sql_connect.php';

?>
<?php

$login = $_POST['login'];
$password = $_POST['password'];

$sql_object_login = mysqli_query($link, "SELECT login FROM users WHERE login = '$login'");
$sql_arr_login = mysqli_fetch_assoc($sql_object_login);

$sql_object_password = mysqli_query($link, "SELECT password FROM users WHERE login = '$login'");
$sql_arr_password = mysqli_fetch_assoc($sql_object_password);

if ($sql_arr_login == false) {
    
    echo 'Пользователь не найден.';
    exit();
    
} elseif ($sql_arr_login['login'] === $login && $sql_arr_password['password'] === $password) {
    
    $sql_username = mysqli_fetch_assoc(mysqli_query($link, "SELECT username FROM users WHERE login = '$login' AND password = '$password'"));
    setcookie('username', $sql_username['username'], time() + 3600 * 24 * 14, '/');
    setcookie('login', $login, time() + 3600 * 24 * 14, '/');
    header('Location: http://localhost/messenger/messages.php');
    exit();
    
} else {
    
    echo 'Неправильный логин или пароль.';
    exit();
    
}