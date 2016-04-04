<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Новости обо всем</title>
    <?php require_once"blocks/head.php"?>
    </head>
    <body>
        <style>
        body {
            background: #eee url(img/background_4.jpg);/* Цвет фона и путь к файлу */
            background-position: center;
            background-repeat: no-repeat;
           
        }
    </style>
        <?php require_once"blocks/header_black.php"?>
        
   
        <section class="profile">
            <section class="container">
                <div class="avatar">
                    <img class="img" src="/img/test_ava.jpg" alt="0">
                    <p>Ева</p>
                    
                </div>

                <div class="maininfo">
                    <hr class="hr">
                    <div class="standart">
                        <p>Город:Москва</p>
                        <p>День рождения:20 марта 1993</p>
                        <p>Телефон: +89997862505</p>
                        <p>Скайп:kenper15</p>
                    
                    </div>
                    <div class="about">
                        <p>O себе:травтповптуоптлоупотлыпотлптолыпылотыловтпвыотлпловыптвоылпвотылптлоывлпвоылоптылвпоыв</p>
                    </div>
                    
                </div>
                
                <div class="blog">
                    <hr class="hr">
                </div>

            </section>
        </section>

         <?php require_once"blocks/footer.php"?>
    </body>
</html>
