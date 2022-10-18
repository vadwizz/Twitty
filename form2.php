<?php
session_start();

require_once('backend/server.php');




//Додання користувача
$usernameS = htmlspecialchars($_POST['username__sign']);
$emailS = htmlspecialchars($_POST['Email__sign']);
$passwordS = htmlspecialchars($_POST['password__sign']);

$_SESSION['usernameS'] = $usernameS;
$_SESSION['emailS'] = $emailS;
$_SESSION['passwordS'] = $passwordS;


$_SESSION['messageSign'] = '';
if ($usernameS  == '') {
    $_SESSION['messageSign'] = 'Введіть ім`я користувача';
    header('location: /signUp.php');
    die();
}
if ($emailS  == '') {
    $_SESSION['messageSign'] = 'Введіть Email';
    header('location: /signUp.php');
    die();
}
if ($passwordS  == '') {
    $_SESSION['messageSign'] = 'Введіть пароль';
    header('location: /signUp.php');
    die();
} else {
    $mysql->query("INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES (NULL, '$usernameS', '$emailS', '$passwordS');");

    $actualUserArray = [
        $actualUserName = $usernameS,
        $actualUserEmail = $emailS,
        $actualUserPassword = $passwordS
    ];
    $_SESSION['ActualUser'] = $actualUserArray;
    $_SESSION['ActualUserName'] = $usernameS;
    $_SESSION['ActualUserEmail'] = $emailS;
    print_r($actualUserArray);



    header('location: backend/userpage.php');
    die();

    header('location: backend/userpage.php');
    die();
};

$mysql->close();
