<?php
session_start();
require_once './connect.php';



$promo_code = $_POST['promo_code'];
$success = mysqli_query($connect, " SELECT * FROM `promocode` WHERE `promocode`='$promo_code' ");

$update_user = mysqli_query($connect, "UPDATE `promocode` SET `used_code`='1' WHERE `promocode` = '$promo_code'");
$count_try = mysqli_query($connect, "UPDATE `promocode` SET `count` = `count`+ 1 WHERE `promocode`='$promo_code'");

if (mysqli_num_rows($success) > 0) {
    header('Location: ../second_page/second.php');
    $update_user;
    $count_try;
} else {
    $_SESSION['message'] = 'Неверный промокод повторите попытку !';
    header('Location: ../index.php');
    session_write_close();
    exit();
}
die();
?>