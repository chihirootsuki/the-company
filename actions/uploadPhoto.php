<?php

require "../classes/User.php";
session_start();

$file_name = $_FILES['photo']['name']; //duck.jpg
$tmp_path = $_FILES['photo']['tmp_name']; //C:/temp/689fhjkd.jpg
$user_id = $_SESSION['user_id'];

$u = new User;
$u->uploadPhoto($user_id, $file_name, $tmp_path);