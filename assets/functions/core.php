<?php
session_start();

$mysqli = mysqli_connect('localhost', 'root', '', 'webdew_db');
$mysqli->set_charset('utf8mb4');

$date = date("d.m.y");

function redirect($url = false)
{ {
    if ($url) {
      header("Location: " . $url);
    } else {
      header("Location: {$_SERVER["HTTP_REFERER"]}");
    }
  }
}
