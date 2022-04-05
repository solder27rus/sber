<?php
include('header.php');include "dbconnect.php";
?>

    <div class="main1-all">
        <div class="profil">
            <div class="avatar">
                <div class="avatar_inf">
                <img class="profilimg" src="img/Rectangle 30.png">
                <div class="c">
    <form action="" method="post" name="form_register">
<?php

$cinf = $_COOKIE["inf"];

$get_tovar = mysqli_query($mysqli," SELECT * FROM users WHERE email IN ('$cinf')" );

if($arr_inf = mysqli_fetch_assoc($get_tovar)){

    echo
    '<input type="text" name="first_name"  class="contentmain8"value="имя: '.$arr_inf['first_name'].' " readonly>
    <input type="text" name="last_name" class="contentmain8" value="фамилия: '.$arr_inf['last_name'].' " readonly>
    <input type="email" name="email"  class="contentmain8"value="почта: '.$arr_inf['email'].' " readonly><br>';
};
?>
    <a id="link_logout" class="buttonimg" onclick="'dellinf'" href="/logout.php">Выход</a>
    </form>
                </div>
</div>
            <div class="zakaz">
                <div class="br">

                    <h1 class="main5text2">Информация</h1>
<div class='all'>
<div class="main1-all">
    <h1>Ваши заказ</h1>
<div class="tovar-oplata">
    <div class="opisanie">
        <div class="summa">
                <form action="" method="post" name="zakaz">
                <?php
        include "buykorzina.php"
        ?>
        <div class="buttonzakaz">
        <input  class="buttonpr" type="submit" name="btn_zakaz" value="Заказать">
        <input  class="buttonpr" type="submit" name="btn_zakaz_new" value="Изменить">
            </div>
    </form>
     </div>
    </div>
</div>
    </div>
        </div>
    </div>


</div>

    </div>
</div>
</div>

            </div>
        </div>
        
    </div>


</div>
<?php
include('footer.php')
?>