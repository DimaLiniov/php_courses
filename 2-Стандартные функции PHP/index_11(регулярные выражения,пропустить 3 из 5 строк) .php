<?php
    $reg = '/\w\d\w\wc/';
    $str_1 = '57abc';
    $str_2 = 'a7abc';
    $str_3 = 'A889c';
    $str_4 = '7abc';
    $str_5 = '57abd';
    echo '<br />'.preg_match($reg, $str_1);
    echo '<br />'.preg_match($reg, $str_2);
    echo '<br />'.preg_match($reg, $str_3);
    echo '<br />'.preg_match($reg, $str_4);
    echo '<br />'.preg_match($reg, $str_5);

?>
<!-- <?php
    $reg = '/a \dM/';
    $str = 'a 8M';
    echo preg_match($reg, $str, $matches);
    echo '<br />';
    print_r($matches);
    $str = 'a M';
    echo preg_match($reg, $str);
    //цифра от 0-9
    $reg = '#a \d b#';
    $str = 'abca 8 b3333';
    echo '<br />'.preg_match($reg, $str);
    //любой символ, кроме цифры
    $reg = '#a \D b#';
    $str = 'abca   b3333';
    echo '<br />'.preg_match($reg, $str);
    //буква или цифра
    $reg = '#a \w b#';
    $str = 'abca d b3333';
    echo '<br />'.preg_match($reg, $str);
    //все, кроме буквы и цифры
    $reg = '#a \W b#';
    $str = 'abca   b3333';
    echo '<br />'.preg_match($reg, $str);
    //все пробельные символы(табуляции)
    $reg = '#a \s b#';
    $str = "abca \t b3333";
    echo '<br />'.preg_match($reg, $str);
    //все, кроме пробельных символов
    $reg = '#a \S b#';
    $str = "abca d b3333";
    echo '<br />'.preg_match($reg, $str);
    //
    $reg = '#a \n b#';
    $str = "abca \n b3333";
    echo '<br />'.preg_match($reg, $str);
?> -->