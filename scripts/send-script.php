<?php

include_once '../include/sql_connect.php';

include_once '../include/functions.php';

?>
<?php

$sender_username = $_COOKIE['username'];
$recipient_username = $_GET['req_username'];
$message = $_POST['message'];

if ($sender_username == false) {
    
    echo 'Неизвестная ошибка';
    exit();
    
} elseif ($recipient_username == false) {
    
    echo 'Неизвестная ошибка';
    exit();
    
} else {
    
    $sql = "INSERT INTO messages (`sender_username`, `recipient_username`, `message`) VALUES ('$sender_username', '$recipient_username', '$message')";
    
    mysqli_query($link, $sql);
    
    header('Location: http://localhost/messenger/messages.php');
    exit();
    
}
