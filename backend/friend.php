<?php

session_start();

require_once('server.php');
require_once('initialize.php');



$friendList = $mysql->query("SELECT * FROM `users` ");

if ($friendList->num_rows > 0) {
    while ($row = $friendList->fetch_assoc()) {

        if ($row['username'] == $actualUserName) {

            continue;
        }


        echo '<article class="friend" id="' . $row['id'] . '">
        <div class="friend__image">
        
                    <img src="/img/user2.png" alt="123">
               
           </div>
           <div friend__info>
           <div class="friend__id" id="' . $row['id'] . ' "> </div>
           <div class="friend__name"> ' . $row['username'] . '</div>
           <div class="friend__email"> ' . $row['email'] . '</div></div>
           
        </article>';
    }
}
