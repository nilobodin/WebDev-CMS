<?php
include 'core.php';

if ($_POST) {
  if (!empty($_FILES["card-image"]) && $_FILES["card-image"]["error"] === UPLOAD_ERR_OK) {
    $files = $_FILES["card-image"];
    $fileType = mime_content_type($files["tmp_name"]);
    $img = $files["name"];
    move_uploaded_file(
        $files["tmp_name"],
        "../../assets/img/uploads/" . $img
    );
}

  $result = $mysqli->query("INSERT INTO `portfolio`(
    `image`, 
    `name`, 
    `link`) VALUES (
      '$img',
      '{$_POST['card-name']}',
      '{$_POST['card-link']}')");
    redirect();
}