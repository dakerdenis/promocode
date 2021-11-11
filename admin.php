<?php
session_start();
require_once './vendor/connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>

<body>
    <div class="container">
        <p>Список </p>
        ul
    </div>

    <pre>
    <?php
    $users = mysqli_query($connect, "SELECT * FROM `promocode`");
    var_dump($users);
    ?>

    </pre>
</body>

</html>