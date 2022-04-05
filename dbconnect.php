<?php

$host = 'localhost';
$name = 'root';
$password = '';
$db = 'cof';

$mysqli = mysqli_connect($host, $name, $password, $db);
mysqli_select_db($mysqli,'cof');
if ($mysqli == false) {
    // printf("Сообщение ошибки: %s\n", mysqli_error($mysqli));
}
mysqli_set_charset($mysqli, 'utf8');
$address_site = "http://mireg";
?>