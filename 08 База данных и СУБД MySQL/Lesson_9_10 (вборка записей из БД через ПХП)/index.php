 <?php 
     define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'mysite');
    
    $mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_errno) exit('Ошибка соединения с БД');
    $mysqli->set_charset('utf8');

    $result_set = $mysqli->query('SELECT * FROM `time_offset`');
    $table = [];
    while (($row = $result_set->fetch_assoc()) != false) {
        $table[] = $row;
    }
    if (isset($_POST['reg'])) {
        $title = $_POST['title'];
        $query = "SELECT `offset` FROM `time_offset` WHERE `title`='$title'";
        $result = $mysqli->query($query);
        //print_r($result);
        $table1 = [];
        while (($row = $result->fetch_assoc()) != false) {
        $table1[] = $row;
        
    } print_r($table1[0]['offset']);
    }
    
  ?>
 <form name='reg' action='index.php' method='post'>
    <select name="title">
        <?php foreach ($table as $key => $value) {
        echo "<option>".$value['title']."</option><br>"; }
        ?>
    </select>
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
    
    $result_set = $mysqli->query('SELECT * FROM `secret_users`');
    $table = [];
    while (($row = $result_set->fetch_assoc()) != false) {
        $table[] = $row;
    }
    //print_r($table);
    
    $result_set = $mysqli->query('SELECT `email`, `balance` FROM `secret_users`');
    $table = [];
    while (($row = $result_set->fetch_assoc()) != false) {
        $table[] = $row;
    }
    //print_r($table);
    
    $result_set = $mysqli->query('SELECT `name`, `balance` FROM `secret_users` WHERE `email`=\'vasya@mail.ru\'');
    $table = [];
    while (($row = $result_set->fetch_assoc()) != false) {
        $table[] = $row;
    }
    //print_r($table);
    
    $result_set = $mysqli->query("SELECT `name`, `email` FROM `secret_users` WHERE `email` LIKE 'v%'");
    $table = [];
    while (($row = $result_set->fetch_assoc()) != false) {
        $table[] = $row;
    }
    //print_r($table);
    
    $result_set = $mysqli->query("SELECT `id`, `name`, `email` FROM `secret_users` WHERE `id` IN (2, 5, 6)");
    $table = [];
    while (($row = $result_set->fetch_assoc()) != false) {
        $table[] = $row;
    }
    //print_r($table);
    
    $result_set = $mysqli->query("SELECT `id`, `name`, `email` FROM `secret_users` WHERE `id` IN (2, 5, 6) AND `email` LIKE '%v%'");
    $table = [];
    while (($row = $result_set->fetch_assoc()) != false) {
        $table[] = $row;
    }
    //print_r($table);
    
    $result_set = $mysqli->query("SELECT `id`, `name`, `email` FROM `secret_users` WHERE `id` IN (2, 5, 6) OR `email` LIKE '%v%'");
    $table = [];
    while (($row = $result_set->fetch_assoc()) != false) {
        $table[] = $row;
    }
    //print_r($table);
    
    $result_set = $mysqli->query("SELECT `id`, `name`, `email` FROM `secret_users` WHERE (`id` IN (2, 5, 6) OR `email` LIKE '%v%') AND `name` = 'Вячеслав'");
    $table = [];
    while (($row = $result_set->fetch_assoc()) != false) {
        $table[] = $row;
    }
    //print_r($table);
    
    $result_set = $mysqli->query("SELECT `name`, `email`, `date_reg` FROM `secret_users` WHERE `email` LIKE 'v%' ORDER BY `date_reg`");
    $table = [];
    while (($row = $result_set->fetch_assoc()) != false) {
        $table[] = $row;
    }
    //print_r($table);
    
    $result_set = $mysqli->query("SELECT `name`, `email`, `date_reg` FROM `secret_users` WHERE `email` LIKE 'v%' ORDER BY `date_reg` DESC");
    $table = [];
    while (($row = $result_set->fetch_assoc()) != false) {
        $table[] = $row;
    }
    //print_r($table);
    
    $result_set = $mysqli->query("SELECT `name`, `email`, `date_reg` FROM `secret_users` WHERE `email` LIKE 'v%' ORDER BY `name`, `email`");
    $table = [];
    while (($row = $result_set->fetch_assoc()) != false) {
        $table[] = $row;
    }
    //print_r($table);
    
    $result_set = $mysqli->query("SELECT *, `secret_users`.`id` as `u_id` FROM `secret_users` INNER JOIN `secret_articles` ON `secret_users`.`id` = `secret_articles`.`user_id`");
    $table = [];
    while (($row = $result_set->fetch_assoc()) != false) {
        $table[] = $row;
    }
    //print_r($table);
    
    $result_set = $mysqli->query('SELECT COUNT(`id`) as `count` FROM `secret_users`');
    $table = [];
    while (($row = $result_set->fetch_assoc()) != false) {
        $table[] = $row;
    }
    //echo $table[0]['count'];
    //print_r($table);
    
    $result_set = $mysqli->query('SELECT SUM(`balance`) as `sum` FROM `secret_users` WHERE `balance` > "0"');
    $table = [];
    while (($row = $result_set->fetch_assoc()) != false) {
        $table[] = $row;
    }
    //print_r($table);
    
    $result_set = $mysqli->query('SELECT * FROM `secret_users` WHERE `balance` = "0" ORDER BY `name` LIMIT 5');
    $table = [];
    while (($row = $result_set->fetch_assoc()) != false) {
        $table[] = $row;
    }
    //print_r($table);
    
    $result_set = $mysqli->query('SELECT * FROM `secret_users` WHERE `balance` = "0" LIMIT 3, 2');
    $table = [];
    while (($row = $result_set->fetch_assoc()) != false) {
        $table[] = $row;
    }
    //print_r($table);
    
    $result_set = $mysqli->query('SELECT * FROM `secret_users` ORDER BY RAND() LIMIT 3');
    $table = [];
    while (($row = $result_set->fetch_assoc()) != false) {
        $table[] = $row;
    }
    print_r($table);
    
    $mysqli->close();
?> -->