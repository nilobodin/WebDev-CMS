<?php include 'assets/functions/core.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\assets\css\style.css">
    <link rel="stylesheet" href="\assets/fonts/fonts.css">
    <link rel="stylesheet" href="\assets/css/aos.css">
    <link rel="stylesheet" type="text/css" href="\assets/css/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="\assets/css/slick.css" />
    <title>WebDev</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__row">
                <div class="header__logo">
                    <a href="/">Web.Dev</a>
                </div>
                <div class="header__menu">
                    <ul class="header__menu_items">
                        <li class="header__menu_item"><a href="/" class="header__menu_link">Home</a></li>
                        <li class="header__menu_item"><a href="#" class="header__menu_link">About</a></li>
                        <li class="header__menu_item"><a href="#testimonials" class="header__menu_link">Testimonials</a>
                        </li>
                        <li class="header__menu_item"><a href="#" class="header__menu_link">Contact</a></li>
                        <?php if (isset($_SESSION['user'])) { ?>
                            <?php if ($_SESSION['user']['role'] == 2) { ?>
                                <li class="header__menu_item">
                                    <a href="admin.php" class="header__menu_link">Admin</a>
                                </li>
                            <?php } ?>
                            <li class="header__menu_item">
                                <a href="account.php" class="header__menu_link">Personal account</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="header__btns">
                    <?php if (!isset($_SESSION['user'])) { ?>
                        <div class="header__btns_left-btn"><a href="signup.php">Sign up</a></div>
                        <div class="header__btns_right-btn"><a href="signin.php">Sign in</a></div>
                    <?php } else { ?>
                        <div class="header__btns_right-btn"><a href="assets/functions/logout.php">Log out</a></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </header>