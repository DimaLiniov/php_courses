<?php
    echo 'Вы пришли с: '.$_SERVER['HTTP_REFERER'];
    $login = $_COOKIE['login']?? false;
    $password = $_COOKIE['password']?? false;
    if ($login !== 'Admin' || $password !== '123') {
        echo 'Доступ закрыт';
        exit;
    }
    $x = $_POST['x']?? false;
    $y = $_POST['y']?? false;
    $x = htmlspecialchars($x);
    $y = htmlspecialchars($y);
    if (is_numeric($x) && is_numeric($y)) echo $x + $y;
    else echo 'error';
?>