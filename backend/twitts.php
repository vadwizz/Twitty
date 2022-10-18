<?php

session_start();

require_once('server.php');
require_once('initialize.php');


$twitt = $_POST['twitt'];
if ($twitt != '') {
    $mysql->query("INSERT INTO `Twitts` (`id`, `username`, `twitt`) VALUES (NULL, '$actualUserName', '$twitt');");
    header("Location: MyPage.php");
    die();
}
$userId = $mysql->query("SELECT `id` FROM `Twitts` ");




if ($twitty->num_rows > 0) {
    while ($row = $twitty->fetch_assoc()) {

        $twittId;
        $twittId = $row['id'];

        echo '<article class="twittPost id="' . $twittId . '">
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
    }
};
