<?
$mysqli = new Mysqli('localhost', 'root', '', 'mybase');
/** Получаем наш ID статьи из запроса */
$name = trim($_POST['name']);
$surname = trim($_POST['surname']);
$age = intval($_POST['age']);

/** Если нам передали ID то обновляем */
if($name && $surname && $age){
	//вставляем запись в БД
	$query = $mysqli->query("INSERT INTO `users` VALUES(NULL, '$name', '$surname', '$age')");
	
	
	
	//извлекаем все записи из таблицы
	$query2 = $mysqli->query("SELECT * FROM `users` ORDER BY `id` DESC");

	while($row = $query2->fetch_assoc()){
		$users['id'][] = $row['id'];
		$users['name'][] = $row['name'];
		$users['surname'][] = $row['surname'];
		$users['age'][] = $row['age'];
	}
	$message = 'Все хорошо';
}else{
	$message = 'Не удалось записать и извлечь данные';
}


/** Возвращаем ответ скрипту */

// Формируем масив данных для отправки
$out = array(
	'message' => $message,
	'users' => $users
);

// Устанавливаем заголовот ответа в формате json
header('Content-Type: text/json; charset=utf-8');

// Кодируем данные в формат json и отправляем
echo json_encode($out);
?>