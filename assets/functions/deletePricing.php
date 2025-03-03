<?php
include 'core.php';

if ($_POST){
    $id = $_POST['card-delete-id'];
    $mysqli->query("DELETE FROM `pricing` WHERE `id` = '$id'");
    redirect();
}