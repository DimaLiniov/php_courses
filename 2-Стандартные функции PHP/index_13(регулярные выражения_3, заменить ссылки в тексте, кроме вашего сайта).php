<?php 
//$reg = '~(https?://)?(www\.)?(mysite\.local(*SKIP)(*F)|[a-z0-9]+(\.[a-z0-9_-]+)*\.([a-z]){2,5})~i';
	$reg = '$(http://phplesson.local(*SKIP)(*FAIL))|((https)?(http)?://([a-z0-9/.])*.([a-z]){2,4}/?)$';
    $text = "Пишите мне на сайт https://ru.wikipedia.org/wiki Буду рад всех слышать.https://s.com Так же мой запасной сайт https://fanbet.com.ua/ My site: http://phplesson.local/";
    $text = preg_replace($reg, 'Ссылки запрещены', $text);
    echo '<br>'.$text;

?>
<!-- <?php
    $reg = '/[a-z0-9_]+(\.[a-z0-9_-]+)*@([0-9a-z][0-9a-z]*\.)+([a-z]){2,4}/';
    $email_1 = 'abc@mail.ru';
    $email_2 = 'abc@mail.mail.com';
    $email_3 = 'abc.dd_dd@mail.mail.com';
    $email_4 = 'abc';
    $email_5 = 'abc@sdfsd';
    $email_6 = 'ddd abc@sdfsd.ru ddd';
    echo preg_match($reg, $email_1).'<br />';
    echo preg_match($reg, $email_2).'<br />';
    echo preg_match($reg, $email_3).'<br />';
    echo preg_match($reg, $email_4).'<br />';
    echo preg_match($reg, $email_5).'<br />';
    echo preg_match($reg, $email_6).'<br />';
    
    $text = "Пишите мне на e-mail abc@abc.abc.ru Буду рад всех слышать. Так же мой запасной e-mail mail@mail.ru";
    
    $text = preg_replace($reg, 'СТОП e-mail', $text);
    
    echo $text.'<br />';
    
    $date = '12.07.2017';
    $reg = '/(\d{2})\.(\d{2})\.(\d{4})/';
    echo preg_replace($reg, '$2.$1.$3', $date);
 
?> -->