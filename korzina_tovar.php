<?php
include "dbconnect.php";

$ctov = $_COOKIE["tovar"];

$get_tovar = mysqli_query($mysqli," SELECT * FROM katalog WHERE id IN ('$ctov')" );

while($arr_tovar = mysqli_fetch_assoc($get_tovar)){
    echo
    '<div class="main6table"><img src="img/'.$arr_tovar['name'].'.png">'.$arr_tovar['name'].'
    <div style="color:#C99E71; margin-right: 5px;">
       <br><button onclick="dellck('.$arr_tovar['id'].')" id="'.$arr_tovar['id'].'" class="buttonbuy"></button>
       <br><input  style="    background-color: #14110E;
       margin: 10px;
       height: 25px;
       width: 33px;
       display: flex;
       padding: 10px;
       color: aliceblue;" type="text" name="kol_zak"  value="">
       </div></div>';
};
?>