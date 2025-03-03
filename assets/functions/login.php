<?php
include 'core.php';

if ($_POST) {
    $result = $mysqli->query("SELECT * FROM `users` 
    WHERE `login` = '{$_POST['login']}' 
    AND `password` = '{$_POST['password']}'");

    if ($result->num_rows > 0) {
        foreach ($result as $key => $value) {
            $_SESSION['user']['id'] = $value['id'];
            $_SESSION['user']['role'] = $value['role_id'];
            $_SESSION['user']['fullname'] = $value['fullname'];
            $_SESSION['user']['email'] = $value['email'];
            $_SESSION['user']['phone'] = $value['phone'];
            $_SESSION['user']['reg_date'] = $value['registration_date'];
            $_SESSION['user']['avatar'] = $value['avatar'];
            header("location: /account.php");
        }
    }
    else {
        $_SESSION['error'] = "Неверный логин или пароль";
        header("location: /signin.php");
    }
}