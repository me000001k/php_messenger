<?php

include_once 'sql_connect.php';


function get_categories(){
    
    global $link;
    
    $sql = "SELECT * FROM categories";
    
    $object = mysqli_query($link, $sql);
    
    $result = mysqli_fetch_all($object, MYSQLI_ASSOC);
    
    return $result;
}

$categories = get_categories();


function get_users() {
    
    global $link;
    
    $sql = "SELECT * FROM users";
    
    $object = mysqli_query($link, $sql);
    
    $result = mysqli_fetch_all($object, MYSQLI_ASSOC);
    
    return $result;
    
}

$all_usernames = get_users();


function get_opponents() {
    
    global $link;
    
    @$username = $_COOKIE['username'];
    
    $sql = "SELECT sender_username users FROM messages WHERE recipient_username = '$username' UNION SELECT recipient_username FROM messages WHERE sender_username = '$username';";
    
    $object = mysqli_query($link, $sql);
    
    $result = mysqli_fetch_all($object, MYSQLI_ASSOC);
    
    return $result;
    
}

$opponents = get_opponents();


function check_cookie_1(){
    
    global $_COOKIE;
    
    if (empty($_COOKIE['username']) || empty($_COOKIE['login'])){
        
        echo '<br>Вы не вошли в систему.';
        exit();
        
    }
    
}


function check_cookie_2(){
    
    global $_COOKIE;
    
    if (isset($_COOKIE['username']) || isset($_COOKIE['login'])){
        
        header('Location: http://localhost/messenger/index.php');
        exit();
        
    }
    
}
