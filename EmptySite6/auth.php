<?php
$connect=mysql_connect("eu-cdbr-azure-north-e.cloudapp.net","ba478dfd6ee7ac","af1859ca") or die(mysql_error());
mysql_select_db("sgdb");
    
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
    if (isset($_POST['enter'])){
        $e_login = $_POST['e_login'];
        $e_password = md5($_POST['e_password']);

        $query = mysql_query("SELECT * FROM users WHERE login = '$e_login'");
        $user_data = mysql_fetch_array($query);
        if ($user_data['password']==$e_password){
            echo "Вы авторизованы";
        }else{
            echo "Неверный пароль или логин";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Авторизация</title>
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
        <input type="text" name="e_login" placeholder="Логин" required ></br>       
        <input type="password" name="e_password" placeholder="Пароль" required ></br> 
        <input type="submit" name="enter" value="Авторизоваться"></br>        
        </form>
<?php require_once"blocks/footer.php"?>

    </body>
</html>
