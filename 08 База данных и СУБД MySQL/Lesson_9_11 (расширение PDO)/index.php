<?php
 define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'mysite');
    
    try {
        $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    } catch (PDOException $e) {
        echo 'Ошибка при подключении к базе данных!';
    }
     
    //print_r($row);
    //echo '<br />';
if (isset($_POST['reg']) && isset($_POST['title']) && is_numeric($_POST['offset'])) {
	$title = $_POST['title'];
	$offset = $_POST['offset'];
	$query = "INSERT INTO `time_offset` (`title`, `offset`) 
                VALUES (:title, :offset)";
    $query = $pdo->prepare($query);
    $query->execute([':title'=> $title, ':offset'=>$offset]);
    echo 'Insert выполнен';
}
$query = 'SELECT * FROM `time_offset`';
$result = $pdo->query($query);
$row = $result->fetchAll(PDO::FETCH_ASSOC);
 if (isset($_POST['reg2'])) {
        $title2 = $_POST['title2'];
        $query = "SELECT `offset` FROM `time_offset` WHERE `title`= ? ";
       	$query = $pdo->prepare($query);
   		$query->execute([$title2]);
   		//$row = $query->fetchAll(PDO::FETCH_ASSOC);
    	//print_r($row[0]['offset']);
      	
    } 
    
?>
<form name='reg' action='index.php' method='post'>
    <p>
        Часовой пояс: <input type='text' name='title' />
    </p>
    <p>
        Смещение: <input type='text' name='offset' />
    </p>
    <p>
        <input type='submit' name='reg' value='Submit' />
    </p>
</form>
<form name='reg2' action='index.php' method='post'>
    <select name="title2">
       <?php foreach ($row as $key => $value) {
        echo "<option>".$value['title']."</option><br>"; }
        ?>
    </select>
    <p>
        <input type='submit' name='reg2' value='Submit' />
    </p>
</form>
<?php if (isset($_POST['reg2'])) {
	$row = $query->fetchAll(PDO::FETCH_ASSOC);
	echo "Сдвиг на:";
	print_r($row[0]['offset']);

} ?>
<!-- 
<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'mysite');
    
    try {
        $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    } catch (PDOException $e) {
        echo 'Ошибка при подключении к базе данных!';
    }
    
    $query = 'SELECT * FROM `secret_users`';
    $result = $pdo->query($query);
    $row = $result->fetch();
    print_r($row);
    echo '<br />';
    
    try {
        $query = 'INSERT INTO `secret_articles` (`user_id`, `title`, `text`, `date`)
        VALUES ("1", "Новая статья", "Текст этой новой статьи...", UNIX_TIMESTAMP())';
        $result = $pdo->exec($query);
        $last_id = $pdo->lastInsertId();
        echo $result.' - '.$last_id.'<br />';
    } catch (PDOException $e) {
        echo 'Ошибка в запросе: '.$e->getMessage().'<br />';
    }
    
    $query = 'UPDATE `secret_articles` SET `date` = `date` + 1';
    $result = $pdo->exec($query);
    echo $result.'<br />';
    
    $query = "DELETE FROM `secret_articles` WHERE `id`='$last_id'";
    $result = $pdo->exec($query);
    echo $result.'<br />';
    
    $query = 'SELECT * FROM `secret_users`';
    $result = $pdo->query($query);
    $table = $result->fetchAll(PDO::FETCH_ASSOC);
    print_r($table);
    
    $email = 'vasya@mail.ru'; // Допустим, получено из формы
    $query = 'SELECT * FROM `secret_users` WHERE `email` = ?';
    $query = $pdo->prepare($query);
    $query->execute([$email]);
    $row = $query->fetch();
    print_r($row);
    
    $query = 'SELECT * FROM `secret_users` WHERE `email` = :email';
    $query = $pdo->prepare($query);
    $query->execute(['email' => $email]);
    $row = $query->fetch();
    print_r($row);
?> -->