<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewpoint" content="width=device-width">
        <title>A-Qroupdan Hədiyyə</title>
        <link rel="stylesheet" type="text/css" href="./style/style.css">
        <link rel="shortcut icon" type="image/png" href="../icons/logotype.png">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap">
        <style>
            .msg {
                color: red;
                font-size: 25px;
                padding: 0px;
                margin: 0 auto;
                text-align: center;
                top: 100px;
                font-weight: 600;
                letter-spacing: 2px;

            }
            @media (max-width: 992px) {
                .msg {
                    font-size: 40px;
                    letter-spacing: 1px;
                }
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <!--Start Header panel-->
            <header class="header">
                <div class="header_content"><img src="../icons/logotype.png"></div>
            </header>
            <!--End Header panel-->
            <!--Start Main panel-->
            <main class="main">
                <div class="image_one">
                    <img src="../icons/image_one.png">
                </div>
                <div class="image_two">
                    <img src="../icons/image_two.png">
                    <div class="image_two_code">
                        <form action="./vendor/promo_code.php" method="post">
                            <div class="form_container">
                                <input type="text" name="promo_code" placeholder="Promocodu daxil edin">
                                <button type="submit">&nbsp;</button>
                            </div>

                        </form>

                    </div>
                    <p>
                            <?php
                            if ($_SESSION['message']) {
                                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                            }
                            unset($_SESSION['message']);
                            ?>
                            </p>
                </div>
            </main>
            <!--End Main panel-->
        </div>
    </body>
</html>












<!-- <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>A-Qroupdan Hədiyyə</title>
    <link rel="stylesheet" type="text/css" href="./First_Style.css">
    <link rel="shortcut icon" href="Icons/LOGO-png.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="Wrapper">
        <main class="Main">
            <div class="Place">
                <div class="Logotype">
                    <img src="Icons/A-Group.png">
                </div>

                <div class="inpute">
                    <form action="./vendor/promo_code.php" method="post">
                        <h1 id="Promo">Promokodu daxil edin</h1>
                        <input type="text" name="promo_code" placeholder="Promokod">
                        <button class="submit_button" type="submit">Göndər</button>

                        <p>

                        </p>
                    </form>
                </div>

            </div>
        </main>
    </div>
</body>

</html>
