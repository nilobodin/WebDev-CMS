<?php
include 'core.php';

if ($_POST) {
  $id = $_POST['card-delete-id'];
  $mysqli->query("DELETE FROM `portfolio` WHERE `id` = '$id'");
  redirect();
}