
<?php
include "dbconnect.php";
$ctov = $_COOKIE["tovar"];
$sum = 0;
$get_tovar = mysqli_query($mysqli," SELECT * FROM katalog WHERE id IN ('$ctov')" );

while($arr_tovar = mysqli_fetch_assoc($get_tovar)){
    $sum += $arr_tovar['price'];
};
/*
        Проверяем была ли отправлена форма, то есть была ли нажата кнопка 
*/ 
    $rand = mt_rand(1000, 9999);// Генерируем случайное число.
    if(isset($_POST["btn_zakaz"]) && !empty($_POST["btn_zakaz"])){
    
        echo
        'Заказ оформлен, приятного дня.';
    }elseif(!isset($_POST["btn_zakaz"]) && empty($_POST["btn_zakaz"])){
        
        echo
        // '<input readonly type="text" name="cod_zakaz" required="required" class="contentmain8" value="Код заказа: '.$rand.'">        
        // <input readonly type="text" name="date_zakaz" required="required" class="contentmain8" value="Дата: '.date (" d/m/Y").'">
        // <input readonly type="text" name="sum_zakaz"  class="contentmain8" value="Сумма: '.$sum.'">';
        include "korzina_tovar.php";
    }
?>