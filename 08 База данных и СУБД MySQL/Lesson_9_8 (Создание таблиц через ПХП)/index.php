<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'mysite');
    
    $mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_errno) exit('Ошибка соединения с БД');
    $mysqli->set_charset('utf8');
    
    for ($i = 0; $i < 10; $i++) {
        $query = 'CREATE TABLE `test_'.$i.'`
    ( `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT , 
    `login` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , 
    `date` INT(10) UNSIGNED NULL DEFAULT NULL ,
    PRIMARY KEY (`id`), UNIQUE (`login`))
    ENGINE = MyISAM CHARSET=utf8 COLLATE utf8_general_ci;';
        echo $mysqli->query($query).'<br />';
    }
    
    for ($i = 0; $i < 10; $i++) {
        $query = "DROP TABLE `test_$i`";
        echo $mysqli->query($query).'<br />';
    }
    
    $mysqli->close();
?>