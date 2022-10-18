<?php
session_start();
$actualUserName = $_SESSION['ActualUserName'];



$MyTwitty = $mysql->query("SELECT `id`, `username`, `date`, `twitt` FROM `Twitts` WHERE username ='$actualUserName' ORDER BY `id` DESC");



if ($MyTwitty->num_rows > 0) {
    while ($row = $MyTwitty->fetch_assoc()) {

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
        </div></div>
        <div class="twittActive">
                <input type="button" name="delete" class="delete" id="' . $twittId . '" value="Видалити">
                <input type="button" name="edit" class="edit" id="' . $twittId . '" value="Редагувати">
                <textarea name="edittext" id=" ' . $twittId . ' " cols="30" rows="2" class="editText"></textarea>
                <input type="button" id=" ' . $twittId . ' " class="editDoneBtn" value="Готово">
                <input type="button" id=" ' . $twittId . ' " class="editCancelBtn" value="Cкасувати">
        </div>
            

        </div>
        </div>
    </article>';
    };
};
