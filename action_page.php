<?php 
session_start();
 //Добавляем файл подключения к БД
 include("dbconnect.php");
?>
<?php
$cinf = $_COOKIE["inf"];

$get_tovar = mysqli_query($mysqli," SELECT * FROM users WHERE email IN ('$cinf')" );

if($arr_inf = mysqli_fetch_assoc($get_tovar)){

            $otzuv = $_POST['otzuv'];
            $name = $_POST.$arr_inf['first_name'];
            $email = $_POST.$arr_inf['email'];
            $ot = $mysqli->query("INSERT INTO `otzuv` (first_name, otzuv, email) VALUES ('".$name."', '".$otzuv."', '".$email."')");
            
            var_dump($ot);
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: ".$address_site."/index.php");
        };
?>