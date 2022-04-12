<?php
session_start();

if($_SESSION['user']){
    header('Location: ./admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/login.css">
    <link rel="shortcut icon" href="./icons/logotype.png" type="image/x-icon">
    <title>Login</title>
    <style>
        .msg {
            color: red;
        }
    </style>
</head>
<body>
        <div class="wrapper">
            <img class="admin_img" src="./icons/logotype.png" alt="">
            <div class="container">
                <form action="./vendor/connect_login.php" method="post">
                    <p>Логин</p>
                    <input type="text" name="login" placeholder="Введите свой логин">
                    <p>Пароль</p>
                    <input class="pass" name="password" type="password" placeholder="Введите свой пароль">
                    <button type="submit">Войти</button>
                </form>
                <p>
                            <?php
                            if ($_SESSION['message_pass']) {
                                echo '<p class="msg"> ' . $_SESSION['message_pass'] . ' </p>';
                            }
                            unset($_SESSION['message_pass']);
                            ?>
                            </p>
            </div>
        </div>
</body>
</html>