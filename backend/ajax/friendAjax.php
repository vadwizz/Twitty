<?php
session_start();

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'new');

$mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($mysql->connect_errno) exit('помилка');
$mysql->set_charset('utf8');

//--------------------------------------------------------------------------------------------


$friendID = $_POST['friendID'];

//$friendID = 79;




$_SESSION['friendTwitty'] = $friendTwitty;
$_SESSION['friendID'] = $friendID;
