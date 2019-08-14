<?php 
	$check = '/(\d{4}).(\d{2}).(\d{2}) (\d{2}):(\d{2}):(\d{2})/';
	echo $date = date('Y.m.d H:i:s').'<br>';
	echo preg_match($check, $date, $matches);
	print_r($matches);	
?>
<!-- <?php
	//. любой символ
    $reg = '/a . b/';
    $str = 'a . b';
    echo preg_match($reg, $str).'<br />';
    //^ начало строки
    $reg = '/^ab/';
    $str = 'aba';
    echo preg_match($reg, $str).'<br />';
    //$ конец строки
    $reg = '/ab$/';
    $str = 'abaaaab';
    echo preg_match($reg, $str).'<br />';
    //[a-z][0-5] интервал
    $reg = '/a [a-z][0-5] b$/';
    $str = 'a c6 b';
    echo preg_match($reg, $str).'<br />';
    //[^a-z] все символы, кроме тех, которые из этого диапазона
    $reg = '/a [^a-z] b$/';
    $str = 'a 6 b';
    echo preg_match($reg, $str).'<br />';
    //([a-z]a\d) группирующие скобки
    $reg = '/a ([a-z]a\d) (b)$/';
    $str = 'a aa5 b';
    echo preg_match($reg, $str, $matches).'<br />';
    print_r($matches);
    echo '<br />';
    //*  чтобы элемент, после которого стоит* мог повторяться произвольное количество раз, позволяет даже не появляться
    $reg = '/a ([a-z]a)* b$/';
    $str = 'a  b';
    echo preg_match($reg, $str).'<br />';
    //+ Тоже, что и *, но обязательное появление минимум раз
    $reg = '/a ([a-z]a)+ b$/';
    $str = 'a aa b';
    echo preg_match($reg, $str).'<br />';
    //? чтобы элемент, после которого он стоит либо был один раз либо вообще небыло
    $reg = '/a a? b$/';
    $str = 'a  b';
    echo preg_match($reg, $str).'<br />';
    //{3} чтоб элемент повторился 3 раза
    $reg = '/a \d{3} b$/';
    $str = 'a 539 b';
    echo preg_match($reg, $str).'<br />';
    //{3,} повторение от 3 и больше
    $reg = '/a \d{3,} b$/';
    $str = 'a 5933 b';
    echo preg_match($reg, $str).'<br />';
    //{3,5} повторение от 3 до 5 раз
    $reg = '/a \d{3,5} b$/';
    $str = 'a 59999 b';
    echo preg_match($reg, $str).'<br />';
    //модификатор i допускает любой регистр
    $reg = '/a \d{3,5} b$/i';
    $str = 'A 59999 b';
    echo preg_match($reg, $str).'<br />';
    //модификатор x пропускает любое количество пробелов
    $reg = '/a\s\d{3,5} b$/ix';
    $str = 'A 59999b';
    echo preg_match($reg, $str).'<br />';
    //модификатор m не воспринимает переносы строки
    $reg = '/ab$/m';
    $str = "ab\nddd";
    echo preg_match($reg, $str).'<br />';
    //модификатор m (поиск совпадений до первой кавычки) 
    $reg = '/"(.*?)"/m';
    $str = 'abc "23" abc "45"';
    echo preg_match_all($reg, $str, $matches).'<br />';
    print_r($matches);
?> -->