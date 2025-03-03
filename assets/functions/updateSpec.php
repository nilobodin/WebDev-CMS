<?php
include 'core.php';

if ($_POST) {
  $id = $_POST['card-update-id'];
  if (!empty($_FILES["card-logo-update"]) && $_FILES["card-logo-update"]["error"] === UPLOAD_ERR_OK) {
    $files = $_FILES["card-logo-update"];
    $fileType = mime_content_type($files["tmp_name"]);
    $img = $files["name"];
    move_uploaded_file(
      $files["tmp_name"],
      "../../assets/img/uploads/" . $img
    );
  } else {
    $currentAvatarQuery = $mysqli->query("SELECT `logo` FROM `spec` WHERE `id` = '$id'");
    $currentAvatar = $currentAvatarQuery->fetch_assoc()['card-logo-update'];
    $img = $currentAvatar;
  }

  $result = $mysqli->query("UPDATE `spec` SET 
  `logo`='$img',
  `title`='{$_POST['card-title-update']}',
  `description`='{$_POST['card-description-update']}' 
  WHERE `id` = '$id'");
  redirect();
}