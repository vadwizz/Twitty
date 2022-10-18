<?php
session_start();



$actualUserArray = $_SESSION['ActualUser'];
$actualUserName = $_SESSION['ActualUserName'];
$actualUserEmail = $_SESSION['ActualUserEmail'];
$actualID = $mysql->query("SELECT `id` FROM `Twitts`");
$twitt = $_POST['area'];





$twitty = $mysql->query("SELECT `id`, `username`, `date`, `twitt` FROM `Twitts`  ORDER BY `id` DESC");

$friend = $mysql->query("SELECT `id`, `username`, `email` FROM `users`");
