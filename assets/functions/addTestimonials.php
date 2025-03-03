<?php
include 'core.php';

if ($_POST) {
  $result = $mysqli->query("INSERT INTO `testimonials`(
    `title`, 
    `description`, 
    `rating`, 
    `link`) VALUES (
        '{$_POST['card-title']}',
        '{$_POST['card-description']}',
        '{$_POST['card-rating']}',
        '{$_POST['card-link']}')");
    redirect();
}