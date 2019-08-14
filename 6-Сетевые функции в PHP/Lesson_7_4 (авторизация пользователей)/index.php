<?php
    session_start();
    $error = false;
    if (isset($_POST['auth'])) {
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = md5($_POST['password']);
        $error = true;
    }
    if (isset($_GET['f']) && $_GET['f'] == 'logout') {
        unset($_SESSION['login']);
        unset($_SESSION['password']);
    }
    $login = ['admin','moder'];
    $password = ['202cb962ac59075b964b07152d234b70','9ab97e0958c6c98c44319b8d06b29c94'];
    $auth = false;
    $iss = isset($_SESSION['login']) && isset($_SESSION['password']);
    foreach ($login as $l) {
        foreach ($password as $p) {
            if ($iss && $_SESSION['login'] === $l && $_SESSION['password'] === $p) {
                $auth = true;
                $error = false; 
            }
        }
    }
?>
<?php if ($error) { ?><p>Неверные логин и/или пароль!</p><?php } ?>
<?php if ($auth) { ?>
    <p>Здравствуйте, <?=$_POST['login']?>!</p>
    <a href='index.php?f=logout'>Выход</a>
<?php }else { ?>
<form name="auth" method="post" action="index.php">
    <p>
        Логин: <input type="text" name="login" />
    </p>
    <p>
        Пароль: <input type="password" name="password" />
    </p>
    <p>
        <input type="submit" name="auth" value="Войти" />
    </p>
</form>
<?php } ?>