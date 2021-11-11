<?php
$connect = mysqli_connect('localhost', 'root', '', 'promocode');

if (!$connect) {
    die('Error connect to database ! try Againa');
}
