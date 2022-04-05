<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/ccs.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/csspr.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/csspor.css"> -->
    <link rel="stylesheet" type="text/css" media="(max-width:400px)" href="css/mobulcss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="cookie_jquery.js"></script>
    <title>C,th</title>
</head>
<body>

<div class="body">

<header>
    <div class="header">

    <div class="logo">
<img class="logo" src="logo.png">
</div>
<div class="lefthead">
Sber // Сбер
</div>
<div class="righthead">
<a class="headmargin" href="index.php">Главная</a>

<?php
    //Проверяем авторизован ли пользователь
    if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
        // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
?>
<a  id="link_register" class="headmargin" href="form_register.php">Регистрация</a>
<a  id="link_auth" class="headmargin" href="form_auth.php">Авторизация</a>

<?php
    }else{
?>
<a class="headmargin"href="PROFIL.php">Профиль</a>
<a class="headmargin"href="market.php">Оформление<br>/////Карт/////</a>
<a class="headmargin"href="support.php">Поддержка</a>
<?php
    }
?>


</div>
</div>

</div>
<script type="text/javascript">
    $(document).ready(function(){
        "use strict";

        //================ Проверка длины пароля ==================
        var password = $('input[name=password]');
         
        password.blur(function(){
            if(password.val() != ''){
 
                //Если длина введенного пароля меньше шести символов, то выводим сообщение об ошибке
                if(password.val().length < 6){
                    //Выводим сообщение об ошибке
                    $('#valid_password_message').text('Минимальная длина пароля 6 символов');
 
                    // Дезактивируем кнопку отправки
                    $('input[type=submit]').attr('disabled', true);
                     
                }else{
                    // Убираем сообщение об ошибке
                    $('#valid_password_message').text('');
 
                    //Активируем кнопку отправки
                    $('input[type=submit]').attr('disabled', false);
                }
            }else{
                $('#valid_password_message').text('Введите пароль');
            }
        });
    });
</script>
    </header>
