<?php
    require_once 'captcha_class.php';
    if (isset($_POST['check'])) {
        if (Captcha::check($_POST['captcha'])) echo 'Проверочный код введён верно!';
        else echo 'Проверочный код введён неверно!';
    }
?>
<form name='check' action='index.php' method='post'>
    <p>
        Проверочный код: <input type='text' name='captcha' />
    </p>
    <p>
        <img src='captcha.php' alt='' />
    </p>
    <p>
        <input type='submit' name='check' value='Отправить' />
    </p>
</form>