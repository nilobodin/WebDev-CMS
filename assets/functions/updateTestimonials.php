<?php
include 'core.php';

if ($_POST) {
  $id = $_POST['card-update-id'];

  $result = $mysqli->query("UPDATE `testimonials` SET 
  `title`='{$_POST['card-title-update']}',
  `description`='{$_POST['card-description-update']}',
  `rating`='{$_POST['card-rating-update']}',
  `link`='{$_POST['card-link-update']}' 
  WHERE `id` = '$id'");
  redirect();
}