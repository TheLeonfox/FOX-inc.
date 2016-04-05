<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Обратная связь</title>
    <?php require_once"blocks/head.php"?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".done").click(function () {
                     $('#messageShow').hide();
                    var name = $(".name").val();
                    var email = $(".email").val();
                    var subject = $(".subject").val();
                    var message = $(".message").val();
                    var fail = "";
                    if (name.length < 3) fail = "Имя не меньше 3 символов";
                    else if (email.split('@').length - 1 == 0 || email.split('.').length - 1 == 0)
                        fail = "Вы ввели некорректный email";
                    else if (subject.length < 5)
                        fail = "Тема сообщения не меньше 5 символов";
                    else if (message.length < 20)
                        fail = "Cообщение не меньше 20 символов";
                    if (fail != ""){
                        $('#messageShow').html(fail + "<div class='clear'><br></div>");
                        $('#messageShow').show();
                        return false;
                    }
                     $.ajax({
                        url:'/ajax/feedback.php',
                        type:'POST',
                        cache: false,
                        data:{'name':name,'email':email,'subject':subject,'message':message},
                        dataType:'html',
                        success: function (data) {
                            if(data == 'Сообщение отправлено' || data == 'Сообщение не отправлено' ) {
                                $('#messageShow').html (data + "<div class='clear'><br></div>");
                                $('#messageShow').show();
                            } 
                         

                        }
                    });
                });
            });
           
        </script>
    </head>
    <body>
  <style>
        body {
            background: #eee url(img/background_4.jpg);/* Цвет фона и путь к файлу */
         background-repeat: no-repeat;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
           
        }
    </style>
        <?php require_once"blocks/header.php"?>
        <section class="feedback">
        <div class="container">
            <input type="text" placeholder="Имя" class="name" name="name"><br />
            <input type="text" placeholder="Email" class="email" name="Email"><br />
            <input type="text" placeholder="Тема сообщения" class="subject" name="subject"><br />
            <textarea name="message" class="message" placeholder="Введите сюда ваше сообщение"></textarea><br />
            <div id="messageShow"></div>
            <input type="button" name="done" class="done" value="Отправить">
        </div>
        
        </section>
   

         <?php require_once"blocks/footer.php"?>
    </body>
</html>
