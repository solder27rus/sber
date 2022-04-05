<?php
//Подключение шапки
include("header.php");
?>
<?php
    if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
?>
<div id="form_register" class="main8content">
<h2>Форма регистрации</h2>

<form action="register.php" method="post" name="form_register">
    <table>
        <tbody><tr>
            <td> Имя: </td>
            <td>
                <input type="text" name="first_name" required="required" class="contentmain8"placeholder="Введите имя">
            </td>
        </tr>

        <tr>
            <td> Фамилия: </td>
            <td>
                <input type="text" name="last_name" required="required"class="contentmain8" placeholder="Введите фамилию">
            </td>
        </tr>
    
        <tr>
            <td> Email: </td>
            <td>
                <input type="email" name="email" required="required" class="contentmain8"placeholder="Введите почту"><br>
                <span id="valid_email_message" class="mesage_error"></span>
            </td>
        </tr>
    
        <tr>
            <td> Пароль: </td>
            <td>
                <input type="password" name="password" placeholder="минимум 6 символов" class="contentmain8"required="required"><br>
                <span id="valid_password_message" class="mesage_error"></span>
            </td>
        </tr>
        <tr>
            <td> Введите капчу: </td>
            <td>
                <p>
                    <img src="captcha.php" alt="Капча" /> <br><br>
                    <input type="text" name="captcha" placeholder="Проверочный код" class="contentmain8"required="required">
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input  class="buttonreg" type="submit" name="btn_submit_register" value="Зарегистрироватся!">
            </td>
        </tr>
    </tbody></table>
</form>
</div>
<?php
    }else{
?>
        <div id="authorized">
            <h2>Вы уже зарегистрированы</h2>
        </div>
<?php
    }

//Подключение подвала
include("footer.php");
?>