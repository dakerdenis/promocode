<?php
    session_start();
    unset($_SESSION['user']);
    header('Location: ../login.php');
    session_write_close();
    exit();