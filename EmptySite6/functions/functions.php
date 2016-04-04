<?php
 $mysqli= FALSE;
 function connectDB(){
     global $mysqli;
    $mysqli = new mysqli("smartgen.database.windows.net","LilFox","Artur244980","SmartGenbase");
    $mysqli->query("SET NAMES 'utf-8");
 }
 function closeDB (){
     global $mysqli;
     $mysqli->close();
 }
?>

