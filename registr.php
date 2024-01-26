<?php
session_start();
include ('tpl/header.php');
include ('tpl/nav.php');
?>
<main class = "flex">
<h2>Регистрация</h2>
    <form id="registrationForm" action="save_user.php" method="post">
        <p>
            <label for="name">Ваше имя:<br></label>
            <input id="name" name="name" type="text" size="15" maxlength="15">
        </p>
        <p>
            <label for="login">Ваш логин:<br></label>
            <input id="login" name="login" type="text" size="15" maxlength="15">
        </p>
        <p>
            <label for="pass">Ваш пароль:<br></label>
            <input id="pass" name="pass" type="password" size="15" maxlength="15">
        </p>
        <p>
            <input type="submit" name="submit" value="Зарегистрироваться">
        </p>
    </form>
</main>
<?php
include ('tpl/footer.php');
?>