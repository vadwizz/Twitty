<?php
session_start();

require_once('../backend/server.php');
require_once('../backend/initialize.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../frontend/pagesStyle.css">
    <title>Document</title>
</head>

<body>
    <?php require_once('../header.php') ?>
    <div class="u-id" data-uid="<?php echo $actualUserName ?>"></div>




    <div class="container row">
        <section class="left col-5">
            <div class="user__info">
                <div class="userImg">
                    <img src="/img/user.png" alt="123">
                </div>
                <div class="userdata">
                    <div class="user"> <?= $actualUserName ?></div>
                    <div class="userEmail"><?= $actualUserEmail ?></div><br><br>
                </div>
            </div>

            <div class="friends">

                <?= require_once('../backend/friend.php') ?>
            </div>
        </section>

        <section class="right col-7">

            <div class="twitts">
                <div class="allTwitts"><?= require_once('twitts.php'); ?></div>



            </div>











        </section>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>







    <script src="/frontend/script.js"></script>

</body>

</html>