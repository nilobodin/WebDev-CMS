<?php
include 'core.php';

if ($_POST) {
    $mysqli->query("INSERT INTO `pricing`(
        `title`, 
        `price`, 
        `one-item`, 
        `two-item`, 
        `three-item`, 
        `four-item`, 
        `five-item`) VALUES (
            '{$_POST['card-title']}',
            '{$_POST['card-description']}',
            '{$_POST['card-items-one']}',
            '{$_POST['card-items-two']}',
            '{$_POST['card-items-three']}',
            '{$_POST['card-items-four']}',
            '{$_POST['card-items-five']}')");
            redirect();
}