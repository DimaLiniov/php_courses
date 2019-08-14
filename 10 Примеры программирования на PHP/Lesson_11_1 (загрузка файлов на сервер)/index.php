<?php
	if (isset($_POST['upload'])) {
        $blacklist = ['.php', '.phtml', '.php3', '.php4', '.html', '.htm'];
        foreach ($blacklist as $item) {
            if (preg_match("/$item$/", $_FILES['im']['name'])) exit('Расширение файла не подходит!');
        }
    
    print_r($_FILES);
    $type = mime_content_type($_FILES['im']['tmp_name']);
    print_r($type);
    if ($type && ($type=='audio/wav' || $type == 'audio/mp3' || $type == 'audio/ogg')|| $type == 'audio/x-m4a') {
    	if ($_FILES['im']['size'] < 1024*3000) {
    		$upload = 'audio/'.$_FILES['im']['name'];
    		if (move_uploaded_file($_FILES['im']['tmp_name'], $upload)) echo 'Файл успешно загружен!' ; else echo 'Ошибка при загрузке файла';
    	}else exit('Размер файла превышен!');
    }else exit('Тип файла не подходит');
   
    //print_r($_FILES);
    }
?>

<form name="upload" action="index.php" method="post" enctype="multipart/form-data">
    <p>
        <input type="file" name="im" />
    </p>
    <p>
        <input type="submit" name="upload" value="Отправить" />
    </p>
</form>
 <?php 
 $dir = opendir('audio/');
 $audio = [];
 while ( $file = readdir($dir)) {
 	if ($file == '.' || $file == '..') {
 		continue;
 	} $audio[] = 'audio/'.$file;
 } 
 foreach ($audio as $value) {
 	echo "<audio controls src=".$value."></audio>";
 } closedir($dir);
  ?> 
<!-- <?php
    if (isset($_POST['upload'])) {
        $blacklist = ['.php', '.phtml', '.php3', '.php4', '.html', '.htm'];
        foreach ($blacklist as $item) {
            if (preg_match("/$item$/", $_FILES['im']['name'])) exit('Расширение файла не подходит!');
        }
        
        $type = getimagesize($_FILES['im']['tmp_name']);
        print_r($type);
        if ($type && ($type['mime'] != 'image/png' || 
        $type['mime'] != 'image/jpg' || $type['mime'] != 'image/jpeg')) {
            if ($_FILES['im']['size'] < 1024 * 1000) {
                $upload = 'images/'.$_FILES['im']['name'];
                if (move_uploaded_file($_FILES['im']['tmp_name'], $upload)) echo 'Файл успешно загружен!';
                else echo 'Ошибка при загрузке файла';
            }
            else exit('Размер файла превышен!');
        }
        else exit('Тип файла не подходит');
    }
?>
<form name="upload" action="index.php" method="post" enctype="multipart/form-data">
    <p>
        <input type="file" name="im" />
    </p>
    <p>
        <input type="submit" name="upload" value="Отправить" />
    </p>
</form> -->