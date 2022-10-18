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
        <form action="form2.php" method="POST" class="form__sign">
            <div class="form__section">
                <label for="username__sign">Username</label>
                <input type="text" name="username__sign" value="<?= $_SESSION['usernameS'] ?>" class="username__sign">
            </div>
            <div class="form__section">
                <label for="email__sign">Email</label>
                <input type="email" name="Email__sign" value="<?= $_SESSION['emailS'] ?>" class="email__sign">
            </div>
            <div class="form__section">
                <label for="password__sign">Password</label>
                <input type="password" name="password__sign" value="<?= $_SESSION['passwordS'] ?>" class="password__sign">
            </div>
            <div id="messageShowSign"><?= $_SESSION['messageSign'] ?></div>
            <input class='btn__sign' type="submit">
        </form>
    </div>


</body>

</html>