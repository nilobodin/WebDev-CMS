<?php
include 'core.php';

if ($_POST) {
  if (!empty($_FILES["card-logo"]) && $_FILES["card-logo"]["error"] === UPLOAD_ERR_OK) {
    $files = $_FILES["card-logo"];
    $fileType = mime_content_type($files["tmp_name"]);
    $img = $files["name"];
    move_uploaded_file(
        $files["tmp_name"],
        "../../assets/img/uploads/" . $img
    );
}

  $result = $mysqli->query("INSERT INTO `spec`(
  `logo`, 
  `title`, 
  `description`) VALUES (
    '$img',
    '{$_POST['card-title']}',
    '{$_POST['card-description']}')");
    redirect();
}