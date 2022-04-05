<?php
    //Запускаем сессию
    session_start();
 
    unset($_SESSION["email"]);
    unset($_SESSION["password"]);
    unset($_COOKIE['inf']);
    setcookie('inf',time());
    // Возвращаем пользователя на ту страницу, на которой он нажал на кнопку вход.
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ".$address_site."/form_auth.php");
    
?>