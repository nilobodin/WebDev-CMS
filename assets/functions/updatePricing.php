<?php
include 'core.php';

if ($_POST) {
    $id = $_POST['card-update-id'];
    $mysqli->query("UPDATE `pricing` SET 
    `title`='{$_POST['card-title-update']}',
    `price`='{$_POST['card-price-update']}',
    `one-item`='{$_POST['card-items-one']}',
    `two-item`='{$_POST['card-items-two']}',
    `three-item`='{$_POST['card-items-three']}',
    `four-item`='{$_POST['card-items-four']}',
    `five-item`='{$_POST['card-items-five']}' WHERE `id` = '$id'");
    redirect();
}