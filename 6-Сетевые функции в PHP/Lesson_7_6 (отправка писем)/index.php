
<form action="index.php" method="get">
	<p></p>От кого: <input type="text" name="from">
	<p></p>Кoму: <input type="text" name="to">
	<p></p>Тема: <input type="text" name="tema">
	<p></p>Tекст: <input type="text" name="text">
    <p></p><input type="submit" value="Отправить" name="send">
</form>
<?php 
	if (isset($_GET['send'])) {
		mail($_GET['to'], $_GET['tema'],$_GET['text'],$_GET['from'] );
	}
 ?>
<!-- <?php
    $to = 'abc@mail.ru';
    $subject = 'Тема';
    $text = 'Текст сообщений! <b>Hello World!</b> <br /><br />';
    $headers = 'From: Вася Пупкин <admin@mysite.local>\r\n';
    $headers .= 'Reply-to: <admin@mysite.ru>\r\n';
    $headers .= 'Content-type: text/html; charset=utf-8';
    $subject = '=?utf-8?B?'.base64_encode($subject).'?=';
    if (mail($to, $subject, $text, $headers)) echo 'Письмо отправлено!';
    else echo 'Письмо не отправлено';
?> -->