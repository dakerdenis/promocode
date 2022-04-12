<?php
session_start();
require_once './connect.php';



$login = $_POST['login'];
$password = $_POST['password'];


$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");

if(mysqli_num_rows($check_user) >0){

    $user = mysqli_fetch_assoc($check_user);

    print_r($user);


    $_SESSION['user'] = [
        "id" => $user['id'],
        "name" => $user['login'],
    ];

   header('Location: ../admin.php');
} 
else {
    $_SESSION['message_pass'] = 'Неправильный логин или пароль !';
    header('Location: ../login.php');
}