<?php
include 'core.php';

if ($_POST) {
    // Добавление картинки
    if (!empty($_FILES["avatar"]) && $_FILES["avatar"]["error"] === UPLOAD_ERR_OK) {
        $files = $_FILES["avatar"];
        $fileType = mime_content_type($files["tmp_name"]);
        if ($fileType !== "image/jpeg" && $fileType !== "image/png") {
            echo "<script>alert('Неверный тип файла')</script>";
        }
        $img = $files["name"];
        move_uploaded_file(
            $files["tmp_name"],
            "../../assets/img/uploads/" . $img
        );
    }
    $result = $mysqli->query("INSERT INTO `users`(
    `fullname`,
    `email`,  
    `phone`, 
    `login`, 
    `password`,
    `registration_date`,
    `avatar`) VALUES (
    '{$_POST['fullname']}',
    '{$_POST['email']}',
    '{$_POST['phone']}',
    '{$_POST['login']}',
    '{$_POST['password']}',
    '$date',
    '$img')");
    header("location: /signin.php");
}