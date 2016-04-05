<?php
$connect=mysql_connect("localhost","123Uyh6g") or die(mysql_error());
mysql_select_db("123");
    
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $login = $_POST['login'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $r_password = $_POST['r_password'];
        if($password==$r_password){
            $password = md5($password);
            $query = mysql_query("INSERT INTO users VALUES('','$username','$login','$password')") or die(mysql_error())
        } else{
            die('Пароли должны совпадать!')
        }

        
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Регистрация</title>
    <?php require_once"blocks/head.php"?>
</head>
    <body>  
        <style>
        body {
            background: #fff url(img/background_4.jpg); /* Цвет фона и путь к файлу */
            
            background-repeat: no-repeat;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
        <?php require_once"blocks/header.php"?>
      <form method="post" action="reg.php">
        <input type="text" name="username" placeholder="Ваше имя" required  ></br> 
        <input type="text" name="login" placeholder="Логин" required ></br>
        <input type="text" name="email" placeholder="E-mail" required ></br>
        <input type="password" name="password" placeholder="Пароль" required ></br> 
        <input type="password" name="r_password" placeholder="Повторите пароль" required ></br>    
        <input type="submit" name="submit" value="Зарегестрироваться"></br>        
        </form>
<?php require_once"blocks/footer.php"?>

    </body>
</html>
