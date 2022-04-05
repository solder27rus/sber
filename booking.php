<?php
    //Запускаем сессию
    session_start();
 
    //Добавляем файл подключения к БД
    include("dbconnect.php");
 
    //Объявляем ячейку для добавления ошибок, которые могут возникнуть при обработке формы.
    $_SESSION["error_messages"] = '';
 
    //Объявляем ячейку для добавления успешных сообщений
    $_SESSION["success_messages"] = '';

    /*
        Проверяем была ли отправлена форма, то есть была ли нажата кнопка зарегистрироваться. Если да, то идём дальше, если нет, то выведем пользователю сообщение об ошибке, о том что он зашёл на эту страницу напрямую.
    */

        if(isset($_POST["btn_booking"]) && !empty($_POST["btn_booking"])){
            
            /* Проверяем если в глобальном массиве $_POST существуют данные отправленные из формы и заключаем переданные данные в обычные переменные.*/
 
if(isset($_POST["numberof"])){
     
        //Обрезаем пробелы с начала и с конца строки
        $numberof = trim($_POST["numberof"]);
        setcookie('prinf',$numberof, time()+360000000,'/');
        //Проверяем переменную на пустоту
        if(!empty($numberof)){
            // Для безопасности, преобразуем специальные символы в HTML-сущности
            $numberof = htmlspecialchars($numberof, ENT_QUOTES);
        }else{
            // Сохраняем в сессию сообщение об ошибке. 
            $_SESSION["error_messages"] .= "<p class='mesage_error'>Укажите Укажите колличество</p>";
    
            //Возвращаем пользователя на страницу регистрации
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: ".$address_site."/index.php");
    
            //Останавливаем скрипт
            exit();
        }
    }
if(isset($_POST["date"])){
 
        //Обрезаем пробелы с начала и с конца строки
        $date = trim($_POST["date"]);
     
        if(!empty($date)){
            // Для безопасности, преобразуем специальные символы в HTML-сущности
            $date = htmlspecialchars($date, ENT_QUOTES);
        }else{
     
            // Сохраняем в сессию сообщение об ошибке. 
            $_SESSION["error_messages"] .= "<p class='mesage_error'>Укажите дату</p>";
             
            //Возвращаем пользователя на страницу регистрации
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: ".$address_site."/index.php");
     
            //Останавливаем  скрипт
            exit();
        }
    }
 if(isset($_POST["time"])){

        //Обрезаем пробелы с начала и с конца строки
        $time = trim($_POST["time"]);
        
        if(!empty($time)){
            // Для безопасности, преобразуем специальные символы в HTML-сущности
            $time = htmlspecialchars($time, ENT_QUOTES);
        }else{
        
            // Сохраняем в сессию сообщение об ошибке. 
            $_SESSION["error_messages"] .= "<p class='mesage_error'>Укажите время</p>";
                
            //Возвращаем пользователя на страницу регистрации
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: ".$address_site."/index.php");
        
            //Останавливаем  скрипт
            exit();
        }  
    }
//Запрос на добавления пользователя в БД
$result_query_insert = $mysqli->query("INSERT INTO `booking` (numberof, date, time) VALUES ('$numberof', '$date', '$time')");
 
if(!$result_query_insert){
    // Сохраняем в сессию сообщение об ошибке. 
    $_SESSION["error_messages"] .= "<p class='mesage_error' >Ошибка запроса на добавления брони в БД</p>";
     
    //Возвращаем пользователя на страницу регистрации
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ".$address_site."/index.php");
 
    //Останавливаем  скрипт
    exit();
}else{
 
    $_SESSION["success_messages"] = "<p class='success_message'>Регистрация прошла успешно!!! </p>";
 
    //Отправляем пользователя на страницу авторизации
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ".$address_site."/index.php");
}
 
/* Завершение запроса */
$result_query_insert->close();
 
//Закрываем подключение к БД
$mysqli->close();
}
?>