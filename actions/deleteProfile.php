<?php

require "../classes/User.php";

//get the id of logged-in user
$user_id = $_POST['user_id'];
// use hidden and POST or use SESSION

$u = new User;
$u->deleteProfile($user_id);