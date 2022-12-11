<?php

$link = mysqli_connect('localhost', 'root', '', 'messenger');

if ($link == false){
    echo 'Ошибка БД: ' . mysqli_connect_error() . mysqli_connect_errno();
    exit();
}
