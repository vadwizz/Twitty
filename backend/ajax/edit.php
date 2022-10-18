<?php


require_once('../server.php');
require_once('../initialize.php');


$UsingId = $_POST['id'];
$newValue = $_POST['newValue'];

$mysql->query("UPDATE `Twitts` SET `twitt` = '$newValue' WHERE `Twitts`.`id` = '$UsingId';");
