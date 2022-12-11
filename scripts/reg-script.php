<?php

include_once '../include/functions.php';

include_once '../include/sql_connect.php';

?>
<?php

$login = $_POST['login'];
$password = $_POST['password'];
$username = $_POST['username'];

// login check
$sql_object_login = mysqli_query($link, "SELECT login FROM users WHERE login = '$login'");
$sql_arr_login = mysqli_fetch_all($sql_object_login, MYSQLI_ASSOC);

// username check
$sql_object_username = mysqli_query($link, "SELECT username FROM users WHERE username = '$username'");
$sql_arr_username = mysqli_fetch_all($sql_object_username, MYSQLI_ASSOC);

if ($sql_arr_login == true)     {
    
    echo 'Такой логин уже зарегистрирован.';
    exit();
    
} elseif ($sql_arr_username == true) {
    
    echo 'Такой пользователь уже существует.';
    exit();
    
} elseif (strlen($username) < 3) {
    
    echo 'Слишком короткое имя пользователя (от 3-х символов).';
    
} elseif (strlen($login) < 3 || strlen($login) > 20) {
    
    echo 'Недопустимая длинна логина (от 3-х символов до 20-ти символов).';
    exit();
    
} elseif (strlen($password) < 3) {
    
    echo 'Слишком короткий пароль (от 3-х символов).';
    exit();
    
} else {
    
    global $link;
    mysqli_query($link, "INSERT INTO users (`login`, `password`, `username`) VALUES ('$login', '$password', '$username')");
    setcookie('username', $username, time() + 3600 * 24 * 14, '/');
    setcookie('login', $login, time() + 3600 * 24 * 14, '/');
    header('Location: http://localhost/messenger/messages.php');
    exit();
    
}
