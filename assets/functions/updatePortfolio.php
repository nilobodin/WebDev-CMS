<?php
include 'core.php';

if ($_POST) {
  $id = $_POST['card-update-id'];
  if (!empty($_FILES["card-image-update"]) && $_FILES["card-image-update"]["error"] === UPLOAD_ERR_OK) {
    $files = $_FILES["card-image-update"];
    $fileType = mime_content_type($files["tmp_name"]);
    $img = $files["name"];
    move_uploaded_file(
      $files["tmp_name"],
      "../../assets/img/uploads/" . $img
    );
  } else {
    $currentAvatarQuery = $mysqli->query("SELECT `image` FROM `portfolio` WHERE `id` = '$id'");
    $currentAvatar = $currentAvatarQuery->fetch_assoc()['card-image-update'];
    $img = $currentAvatar;
  }

  $result = $mysqli->query("UPDATE `portfolio` SET 
  `image`='$img',
  `name`='{$_POST['card-name-update']}',
  `link`='{$_POST['card-link-update']}' 
  WHERE `id` = '$id'");
  redirect();
}