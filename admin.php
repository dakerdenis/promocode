<?php
session_start();
require_once './vendor/connect.php';
if(!$_SESSION['user']){
    header('Location: ./login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="./style/admin.css">
    <link rel="stylesheet" href="./style/admin_img.css">
    <link rel="shortcut icon" href="./icons/logotype.png" type="image/x-icon">
    <style>
        .logout{
            color: #010101;
            background-color: #fff;
            text-decoration: none;
            text-align: center;
            padding: 3px;
            display: block;
            border-radius: 2px;
        }
        .user_block {
    font-family: 'Source Sans Pro', sans-serif;
    background-color: #f1f1f1;
    width: 300px;
    padding: 10px;
    border-radius: 2px;
    box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
}
.user_block p {
    padding: 5px;
    margin: 0;
}
    </style>
</head>

<body>
    <div class="user_block">
        <p>ID пользователя: <?= $_SESSION['user']['id'] ?></p>
        <p>Login пользователя: <?= $_SESSION['user']['name'] ?></p>
        <a class="logout" href="./vendor/logout.php">Выход</a>
    </div>
    <div class="image__div">
        <div class="__div_img">
            <img src="./icons/logotype.png" alt="">
        </div>
    </div>
<div class="info__block">
                <div class="__block__text">
                    <p><strong>ID</strong>  - порядковый номер под которым записан данный промокод в базе данных</p>
                    <p><strong>Промокод</strong> - имеющийся в наличий промокод</p>
                    <p><strong>Доступность</strong> - использование промокода, <span>"Использован"</span> - означает то что промокод уже был введен в базу данных пользователем и записан как использованый.  </p>
                    <p><strong>Counts</strong> - количество для учёта сколько раз был введен данный промокод</p>
                </div>
    </div>


    <!-- 1 to 400-->
    <p class="amount_of_code">1 &#10132; 400</p>
    <div class="wrapper">

        <div class="container" id="admin_app">
            <table class="table_holder">
                <tr class="desc">
                    <td class="table_td">ID</td>
                    <td class="table_td">Промокод</td>
                    <td class="table_td ">Доступность</td>
                    <td class="table_td">Counts</td>
                </tr>
                <?php
                $users = mysqli_query($connect, "SELECT * FROM `promocode` LIMIT 0,100 ");
                $users = mysqli_fetch_all($users);
                $value = "green";
                $text_value = "";

                foreach ($users as $user) {
                    if ($user[2] > 0) {
                        $value = "red;";
                        $text_value = "Использован";
                    } else {
                        $value = "green;";
                        $text_value = "свободен";
                    }
                ?>
                    <tr class="desc2">
                        <td class="table_td"><?= $user[0] ?></td>
                        <td class="table_td"><?= $user[1] ?></td>
                        <td class="table_td used_or_not" style="color: <?= $value ?>"><?= $text_value ?></td>
                        <td class="table_td"> <?= $user[3] ?> </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <div class="container" id="admin_app">
            <table class="table_holder">
                <tr class="desc" >
                    <td class="table_td">ID</td>
                    <td class="table_td">Промокод</td>
                    <td class="table_td ">Доступность</td>
                    <td class="table_td">Counts</td>
                </tr>
                <?php
                $users = mysqli_query($connect, "SELECT * FROM `promocode` LIMIT 100,100 ");
                $users = mysqli_fetch_all($users);
                $value = "green";
                $text_value = "";

                foreach ($users as $user) {
                    if ($user[2] > 0) {
                        $value = "red;";
                        $text_value = "Использован";
                    } else {
                        $value = "green;";
                        $text_value = "свободен";
                    }
                ?>
                    <tr class="desc2">
                        <td class="table_td"><?= $user[0] ?></td>
                        <td class="table_td"><?= $user[1] ?></td>
                        <td class="table_td used_or_not" style="color: <?= $value ?>"><?= $text_value ?></td>
                        <td class="table_td"> <?= $user[3] ?> </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <div class="container" id="admin_app">
            <table class="table_holder">
                <tr class="desc">
                    <td class="table_td">ID</td>
                    <td class="table_td">Промокод</td>
                    <td class="table_td ">Доступность</td>
                    <td class="table_td">Counts</td>
                </tr>
                <?php
                $users = mysqli_query($connect, "SELECT * FROM `promocode` LIMIT 200,100 ");
                $users = mysqli_fetch_all($users);
                $value = "green";
                $text_value = "";

                foreach ($users as $user) {
                    if ($user[2] > 0) {
                        $value = "red;";
                        $text_value = "Использован";
                    } else {
                        $value = "green;";
                        $text_value = "свободен";
                    }
                ?>
                    <tr class="desc2">
                        <td class="table_td"><?= $user[0] ?></td>
                        <td class="table_td"><?= $user[1] ?></td>
                        <td class="table_td used_or_not" style="color: <?= $value ?>"><?= $text_value ?></td>
                        <td class="table_td"> <?= $user[3] ?> </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>

        <div class="container" id="admin_app">
            <table class="table_holder">
                <tr class="desc" >
                    <td class="table_td">ID</td>
                    <td class="table_td">Промокод</td>
                    <td class="table_td ">Доступность</td>
                    <td class="table_td">Counts</td>
                </tr>
                <?php
                $users = mysqli_query($connect, "SELECT * FROM `promocode` LIMIT 300,100 ");
                $users = mysqli_fetch_all($users);
                $value = "green";
                $text_value = "";

                foreach ($users as $user) {
                    if ($user[2] > 0) {
                        $value = "red;";
                        $text_value = "Использован";
                    } else {
                        $value = "green;";
                        $text_value = "свободен";
                    }
                ?>
                    <tr class="desc2">
                        <td class="table_td"><?= $user[0] ?></td>
                        <td class="table_td"><?= $user[1] ?></td>
                        <td class="table_td used_or_not" style="color: <?= $value ?>"><?= $text_value ?></td>
                        <td class="table_td"> <?= $user[3] ?> </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>


    <p class="amount_of_code">400 &#10132; 800</p>
    <div class="wrapper">

        <div class="container" id="admin_app">
            <table class="table_holder">
                <tr class="desc">
                    <td class="table_td">ID</td>
                    <td class="table_td">Промокод</td>
                    <td class="table_td ">Доступность</td>
                    <td class="table_td">Counts</td>
                </tr>
                <?php
                $users = mysqli_query($connect, "SELECT * FROM `promocode` LIMIT 400,100 ");
                $users = mysqli_fetch_all($users);
                $value = "green";
                $text_value = "";

                foreach ($users as $user) {
                    if ($user[2] > 0) {
                        $value = "red;";
                        $text_value = "Использован";
                    } else {
                        $value = "green;";
                        $text_value = "свободен";
                    }
                ?>
                    <tr class="desc2">
                        <td class="table_td"><?= $user[0] ?></td>
                        <td class="table_td"><?= $user[1] ?></td>
                        <td class="table_td used_or_not" style="color: <?= $value ?>"><?= $text_value ?></td>
                        <td class="table_td"> <?= $user[3] ?> </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <div class="container" id="admin_app">
            <table class="table_holder">
                <tr class="desc" >
                    <td class="table_td">ID</td>
                    <td class="table_td">Промокод</td>
                    <td class="table_td ">Доступность</td>
                    <td class="table_td">Counts</td>
                </tr>
                <?php
                $users = mysqli_query($connect, "SELECT * FROM `promocode` LIMIT 500,100 ");
                $users = mysqli_fetch_all($users);
                $value = "green";
                $text_value = "";

                foreach ($users as $user) {
                    if ($user[2] > 0) {
                        $value = "red;";
                        $text_value = "Использован";
                    } else {
                        $value = "green;";
                        $text_value = "свободен";
                    }
                ?>
                    <tr class="desc2">
                        <td class="table_td"><?= $user[0] ?></td>
                        <td class="table_td"><?= $user[1] ?></td>
                        <td class="table_td used_or_not" style="color: <?= $value ?>"><?= $text_value ?></td>
                        <td class="table_td"> <?= $user[3] ?> </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <div class="container" id="admin_app">
            <table class="table_holder">
                <tr class="desc">
                    <td class="table_td">ID</td>
                    <td class="table_td">Промокод</td>
                    <td class="table_td ">Доступность</td>
                    <td class="table_td">Counts</td>
                </tr>
                <?php
                $users = mysqli_query($connect, "SELECT * FROM `promocode` LIMIT 600,100 ");
                $users = mysqli_fetch_all($users);
                $value = "green";
                $text_value = "";

                foreach ($users as $user) {
                    if ($user[2] > 0) {
                        $value = "red;";
                        $text_value = "Использован";
                    } else {
                        $value = "green;";
                        $text_value = "свободен";
                    }
                ?>
                    <tr class="desc2">
                        <td class="table_td"><?= $user[0] ?></td>
                        <td class="table_td"><?= $user[1] ?></td>
                        <td class="table_td used_or_not" style="color: <?= $value ?>"><?= $text_value ?></td>
                        <td class="table_td"> <?= $user[3] ?> </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>

        <div class="container" id="admin_app">
            <table class="table_holder">
                <tr class="desc" >
                    <td class="table_td">ID</td>
                    <td class="table_td">Промокод</td>
                    <td class="table_td ">Доступность</td>
                    <td class="table_td">Counts</td>
                </tr>
                <?php
                $users = mysqli_query($connect, "SELECT * FROM `promocode` LIMIT 700,100 ");
                $users = mysqli_fetch_all($users);
                $value = "green";
                $text_value = "";

                foreach ($users as $user) {
                    if ($user[2] > 0) {
                        $value = "red;";
                        $text_value = "Использован";
                    } else {
                        $value = "green;";
                        $text_value = "свободен";
                    }
                ?>
                    <tr class="desc2">
                        <td class="table_td"><?= $user[0] ?></td>
                        <td class="table_td"><?= $user[1] ?></td>
                        <td class="table_td used_or_not" style="color: <?= $value ?>"><?= $text_value ?></td>
                        <td class="table_td"> <?= $user[3] ?> </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>




    <p class="amount_of_code">800 &#10132; 1000</p>
    <div class="wrapper">

        <div class="container" id="admin_app">
            <table class="table_holder">
                <tr class="desc">
                    <td class="table_td">ID</td>
                    <td class="table_td">Промокод</td>
                    <td class="table_td ">Доступность</td>
                    <td class="table_td">Counts</td>
                </tr>
                <?php
                $users = mysqli_query($connect, "SELECT * FROM `promocode` LIMIT 800,100 ");
                $users = mysqli_fetch_all($users);
                $value = "green";
                $text_value = "";

                foreach ($users as $user) {
                    if ($user[2] > 0) {
                        $value = "red;";
                        $text_value = "Использован";
                    } else {
                        $value = "green;";
                        $text_value = "свободен";
                    }
                ?>
                    <tr class="desc2">
                        <td class="table_td"><?= $user[0] ?></td>
                        <td class="table_td"><?= $user[1] ?></td>
                        <td class="table_td used_or_not" style="color: <?= $value ?>"><?= $text_value ?></td>
                        <td class="table_td"> <?= $user[3] ?> </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <div class="container" id="admin_app">
            <table class="table_holder">
                <tr class="desc" >
                    <td class="table_td">ID</td>
                    <td class="table_td">Промокод</td>
                    <td class="table_td ">Доступность</td>
                    <td class="table_td">Counts</td>
                </tr>
                <?php
                $users = mysqli_query($connect, "SELECT * FROM `promocode` LIMIT 900,100 ");
                $users = mysqli_fetch_all($users);
                $value = "green";
                $text_value = "";

                foreach ($users as $user) {
                    if ($user[2] > 0) {
                        $value = "red;";
                        $text_value = "Использован";
                    } else {
                        $value = "green;";
                        $text_value = "свободен";
                    }
                ?>
                    <tr class="desc2">
                        <td class="table_td"><?= $user[0] ?></td>
                        <td class="table_td"><?= $user[1] ?></td>
                        <td class="table_td used_or_not" style="color: <?= $value ?>"><?= $text_value ?></td>
                        <td class="table_td"> <?= $user[3] ?> </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>



    </div>









    





    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="./vendor/app.js"></script>
</body>

</html>





