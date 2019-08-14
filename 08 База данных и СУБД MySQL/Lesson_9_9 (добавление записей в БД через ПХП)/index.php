<?php 
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'mysite');
    
    $mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_errno) exit('Ошибка соединения с БД');
    $mysqli->set_charset('utf8');

    if (isset($_POST['reg'])) {
        $time = $mysqli->real_escape_string(htmlspecialchars($_POST['time']));
        if(is_numeric($_POST['offset'])){
        $offset = $mysqli->real_escape_string(htmlspecialchars($_POST['offset']));
        $query = "INSERT INTO `time_offset` (`title`, `offset`) 
                VALUES ('$time', '$offset')";
        $result = $mysqli->query($query);
        }
    }
    if(isset($result)) echo  "<p>Регистрация прошла успешно!</p>";
        else echo "<p>Ошибка при регистрации!</p>";
 ?>
 <form name='reg' action='index.php' method='post'>
    <p>
        Часовой пояс: <input type='text' name='time' />
    </p>
    <p>
        Смещение: <input type='text' name='offset' />
    </p>
    <p>
        <input type='submit' name='reg' value='Submit' />
    </p>
</form>
<!-- <?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'mysite');
    
    $mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_errno) exit('Ошибка соединения с БД');
    $mysqli->set_charset('utf8');
    
    /*$mysqli->query("INSERT INTO `secret_users`
    (`id`, `name`, `email`, `password`, `balance`, `ip_reg`, `date_reg`)
    VALUES (NULL, 'Вячеслав', 'v2@mail.ru', MD5('123'), '0.00', INET_ATON('127.0.0.1'), UNIX_TIMESTAMP())");*/
    
    if (isset($_POST['reg'])) {
        $name = $mysqli->real_escape_string(htmlspecialchars($_POST['name']));
        $email = $mysqli->real_escape_string(htmlspecialchars($_POST['email']));
        $password = $mysqli->real_escape_string(htmlspecialchars($_POST['password']));
        $ip_reg = ip2long($_SERVER['REMOTE_ADDR']);
        $query = "INSERT INTO `secret_users`
        (`name`, `email`, `password`, `ip_reg`, `date_reg`)
        VALUES ('$name', '$email', MD5('$password'), '$ip_reg', UNIX_TIMESTAMP())";
        $result = $mysqli->query($query);
    }
    
    $mysqli->close();
?>
<?php if (isset($result)) { ?>
    <?php if ($result) { ?>
        <p>Регистрация прошла успешно!</p>
    <?php } else { ?>
        <p>Ошибка при регистрации!</p>
    <?php } ?>
<?php } ?>
<form name='reg' action='index.php' method='post'>
    <p>
        Имя: <input type='text' name='name' />
    </p>
    <p>
        E-mail: <input type='text' name='email' />
    </p>
    <p>
        Пароль: <input type='password' name='password' />
    </p>
    <p>
        <input type='submit' name='reg' value='Зарегистрироваться' />
    </p>
</form> -->