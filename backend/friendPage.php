<?php
session_start();
require_once('server.php');
require_once('initialize.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../frontend/pagesStyle.css">
</head>

<body>


    <?php require_once('../header.php') ?>


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


                <hr>
            </div>
            <div class="friends">
                <?= require_once('../backend/friend.php') ?>
            </div>
        </section>

        <section class="right col-7">

            <div class="twitts">

                <?php
                $friendID = $_SESSION['friendID'];
                $friendName = $mysql->query("SELECT `username` FROM `users` WHERE id ='$friendID'");

                if ($friendName->num_rows > 0) {
                    while ($row = $friendName->fetch_assoc()) {
                        $actualFriendName = $row['username'];
                        echo '<div class="friend__title__name">' . $actualFriendName . '</div>';
                    }
                }

                $friendTwitty = $mysql->query("SELECT `id`, `username`, `date`, `twitt` FROM `Twitts` WHERE username ='$actualFriendName' ORDER BY `id` DESC");




                if ($friendTwitty->num_rows > 0) {
                    while ($row = $friendTwitty->fetch_assoc()) {
                        $twittId;
                        $twittId = $row['id'];

                        echo '
                        <article class="twittPost id="' . $twittId . '">
                        <div class=" twitt" col-7>
                        <div class="twitt__btn">
                            <div class="twittContainer">
                                <div class="userimg">
                                    <img src="/img/user.png" alt="123" width=50px>
                                </div>
                            <div class="twittData">
                            <div class="titleUser">' . $row['username'] . '</div>
                            <div class="titleDate">' . $row['date'] . '  </div>
                            <div class="twittBody">' . $row['twitt'] . '</div>' . '
                            </div></>
                         </article>';
                    };
                }; ?>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
                <script src="/frontend/script.js"></script>
            </div>


</body>

</html>