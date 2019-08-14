
<form action="index.php" method="get">
    <p></p>От кого: <input type="text" name="from">
    <p></p>Кoму: <input type="text" name="to">
    <p></p>Тема: <input type="text" name="tema">
    <p></p>Tекст: <input type="text" name="text">
    <p></p><input type="submit" value="Отправить" name="send">
</form>
<?php 
    if (isset($_GET['send'])) {
       require_once 'phpmailer_class.php';
        $mail = new PHPMailer();
        $mail->CharSet = 'utf-8';
        $mail->setFrom($_GET['from']);
        $mail->addAddress($_GET['to']);
        $mail->Subject = $_GET['tema'];
        $mail->Body = $_GET['text'];
        if($mail->send()) {
        echo 'Письмо успешно отправлено!';
    } else {
        echo 'Письмо не отправлено!';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
    }
 ?>
<!-- <?php
    /* https://github.com/PHPMailer/PHPMailer */
    require_once 'phpmailer_class.php';
    
    $mail = new PHPMailer();
    $mail->CharSet = 'utf-8';
    $mail->setFrom('admin@mysite.local', 'Администратор');
    $mail->addAddress('joe@example.net', 'Joe User');
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addAttachment('a.jpg');
    $mail->isHTML(true);
    $mail->Subject = 'Тема';
    $mail->Body = 'Текст <b>письма</b>.';
    $mail->AltBody = 'Текст письма.';
    if($mail->send()) {
        echo 'Письмо успешно отправлено!';
    } else {
        echo 'Письмо не отправлено!';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
?> -->