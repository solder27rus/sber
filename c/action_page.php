<?php 
session_start();
 //Добавляем файл подключения к БД
 include("dbconnect.php");
?>
<?php
    /*
        Проверяем была ли отправлена форма, то есть была ли нажата кнопка 
    */
    if(isset($_POST["btn_cancel"]) && !empty($_POST["btn_cancel"])){
        ?>

        <?php

        $cinf = $_COOKIE["inf"];
        
        $get_otzuv = mysqli_query($mysqli," SELECT * FROM users WHERE email IN ('$cinf')" );
        
        if($arr_inf = mysqli_fetch_assoc($get_otzuv)){
            $name = $_POST.$arr_inf['first_name'];
            $email = $_POST.$arr_inf['email'];
            $otzuv = $_POST['otzuv'];
            mysqli_query($mysqli,"INSERT INTO `otzuv` (`otzuv`) VALUE (`$otzuv`)");
        };
        ?>

        <?php
    }

?>