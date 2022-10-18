<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontend/formStyle.css">
    <title>Document</title>
</head>

<body>




    <div class="form">
        <form action="form.php" method="POST" class="form__log">
            <div class="form__section">
                <label for="username">Username</label>
                <input type="text" name="username" value="<?= $_SESSION['username'] ?>" id="username" class="username">
            </div>
            <div class="form__section">
                <label for="email">Email</label>
                <input type="email" name="Email" value="<?= $_SESSION['email'] ?>" id="email" class="email">
            </div>
            <div class="form__section">
                <label for="password">Password</label>
                <input type="password" name="password" value="<?= $_SESSION['password'] ?>" id="password" class="password">
            </div>

            <div class="form__section">
                <div id="messageShow"><?= $_SESSION['message'] ?></div>
                <input class='btn__log' type="submit">
                <p class="message">Not registered? <a href="signUp.php" class="login">Create an account</a></p>

            </div>
        </form>
    </div>
</body>

</html>