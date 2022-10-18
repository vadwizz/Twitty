$(document).ready(function () {


    //Перевірка заповненості форми
    $('.btn__sign').click(function (e) {
        let nameSign = $('.username__sign').val();
        let emailSign = $('.email__sign').val();
        let passwordSign = $('.password__sign').val();
        let failSign = '';

        if (nameSign == '')
            fail = 'Введіть нік';
        else if (emailSign == '')
            fail = 'Введіть email';
        else if (passwordSign == '')
            fail = 'Введіть пароль';
        if (fail != '') {
            e.preventDefault();
            $('#messageShowSign').html(fail);
            $('#messageShowSign').show();

        }
    });





    $(document).on("keyup", ".area", function (e) {
        e.preventDefault();
        let textbox = $(e.target);

        let value = textbox.val().trim();
        let submitButton = $('.sub');

        if (value == "") {
            submitButton.prop("disabled", true);
            return;
        }

        if (value != "") {
            submitButton.prop("disabled", false)
            return;
        }






    });


    $('.delete').click(function (e) {
        let usingId = this.id;
        $.ajax({
            type: "POST",
            url: "../backend/ajax/delete.php",
            data: {
                id: usingId
            },

            success: function (response) {
                location.reload();

            }
        });


    });


    $('.friends').click(function (e) {
        let targetItem = e.target;
        let targetFriend = targetItem.closest('.friend');
        let friendID = targetFriend.id;
        $.ajax({
            type: "POST",
            url: "../backend/ajax/friendAjax.php",
            data: {
                friendID: friendID
            },

            success: function (data) {

                window.location = '../backend/friendPage.php';

            }
        });
    });

    $('.user__info').click(function (e) {
        window.location = '../backend/MyPage.php';
    });



    $('.editText').hide();
    $('.editDoneBtn').hide();
    $('.editCancelBtn').hide();

    $('.edit').click(function (e) {
        let targetItem = e.target;
        let targetButt = targetItem.closest('.twittActive');

        if (targetButt) {
            let area = $(targetButt).find('.editText');
            let butt = $(targetButt).find('.editDoneBtn');
            let buttCancel = $(targetButt).find('.editCancelBtn');
            let ID = this.id;


            area.show();
            butt.show();
            buttCancel.show();
            areaValue = area.val();


            $(butt).click(function () {
                areaValue = area.val();
                if (areaValue != "") {
                    $.ajax({
                        type: "POST",
                        url: "../backend/ajax/edit.php",
                        data: {
                            newValue: areaValue,
                            id: ID
                        },
                        success: function (data) {
                            area.hide();
                            butt.hide();
                            location.reload(true);


                        }

                    });
                }


            });
            $(buttCancel).click(function (e) {
                area.hide();
                butt.hide();
                buttCancel.hide();

            });
        }


    });

    $('.exit').click(function (e) {
        window.location = '../index.php';

    });

    $('.MyPage').click(function (e) {
        window.location = '../backend/MyPage.php';

    });

    $('.mainPage').click(function (e) {
        window.location = '../backend/userpage.php';

    });


});







