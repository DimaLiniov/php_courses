<?php

$file_get = fopen('index_5.txt', 'a+');
fseek($file_get, 0);
//var_dump($_POST);
?>
<form action="index.php" method="POST">
	<textarea name="text" id="" cols="30" rows="10"><?php 
	if (isset($_POST['download']) && (filesize('index_5.txt') > 0)){ $_POST['download'] = false; echo fread($file_get, filesize('index_5.txt'));} 
	elseif (isset($_POST['save'])){$_POST['save'] = false; fseek($file_get, 0); file_put_contents('index_5.txt', $_POST['text']); echo 'сохранение прошло успешно';}
	elseif (isset($_POST['delete'])){$_POST['delete'] = false; fclose($file_get); unlink('index_5.txt'); echo 'файл успешно удален';} 
	else echo 'файла не существует';?></textarea>
	<input type="submit" name="save"  value="Save"/>
	<input type="submit" name="download"  value="Download"/>
	<input type="submit" name="delete" value="Delete"/>
</form>
