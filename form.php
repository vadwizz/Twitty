<?php

session_start();
require_once('backend/user.php');
require_once('backend/server.php');






//Вхід
$username = htmlspecialchars($_POST['username']);
$email = htmlspecialchars($_POST['Email']);
$password = htmlspecialchars($_POST['password']);

echo ' Введені дані : ' . $username . ' - ' . $email . ' - ' . $password . '<br>';

$result = $mysql->query("SELECT * FROM `users` ");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row['username'] == $username) {
            echo  $username . '<br>';
        }
    };
};


$_SESSION['message'] = '';
$res = $mysql->query("SELECT `username`, `email`, `password` FROM `users` WHERE username ='$username'");
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        echo $row['username'] . ' - ';
        if ($row['email'] != $email) {
            echo "False  -  ";
            $_SESSION['message'] = 'Щось введено некоректно';
            header('location: /login.php');
            die();
        } else {
            echo $row['email'] . ' - ';
        };
        if ($row['password'] != $password) {
            echo "False ";
            $_SESSION['message'] = 'Щось введено некоректно';
            header('location: login.php');
            die();
        } else {
            echo $row['password'] . '<hr>';
            $_SESSION['message'] = '';

            $actualUserArray = [
                $actualUserName = $username,
                $actualUserEmail = $email,
                $actualUserPassword = $password
            ];
            $_SESSION['ActualUser'] = $actualUserArray;
            $_SESSION['ActualUserName'] = $username;
            $_SESSION['ActualUserEmail'] = $email;
            print_r($actualUserArray);



            header('location: backend/userpage.php');
            die();
        };
    }
};





$username = htmlspecialchars($_POST['username']);
$email = htmlspecialchars($_POST['Email']);
$password = htmlspecialchars($_POST['password']);

$_SESSION['username'] = $username;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;









$mysql->close();
