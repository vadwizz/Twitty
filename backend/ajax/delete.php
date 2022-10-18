<?php

require_once('../server.php');
require_once('../initialize.php');

$UsingId = $_POST['id'];
$mysql->query("DELETE FROM Twitts WHERE `Twitts`.`id` = '$UsingId'");
