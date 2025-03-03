<?php
include 'core.php';
$currentAvatarQuery = $mysqli->query("SELECT `avatar` FROM `users` WHERE `id` = '{$_SESSION['user']['id']}'");
$currentAvatar = $currentAvatarQuery->fetch_assoc()['avatar'];

$userId = $_SESSION['user']['id'];
$img = $currentAvatar;
if (!empty($_FILES["update_avatar"]) && $_FILES["update_avatar"]["error"] === UPLOAD_ERR_OK) {
    $files = $_FILES["update_avatar"];
    $fileType = mime_content_type($files["tmp_name"]);
    if ($fileType !== "image/jpeg" && $fileType !== "image/png") {
        echo "<script>alert('Неверный тип файла')</script>";
        header("location: /");
    }
    $img = $files["name"];
    move_uploaded_file(
        $files["tmp_name"],
        "../../assets/img/uploads/" . $img
    );
}

$mysqli->query("UPDATE `users` SET 
    `fullname`='{$_POST['update_fullname']}',
    `email`='{$_POST['update_email']}',
    `phone`='{$_POST['update_phone']}',
    `avatar`='$img' 
    WHERE `id` = '$userId'");
header("location: /account.php");
