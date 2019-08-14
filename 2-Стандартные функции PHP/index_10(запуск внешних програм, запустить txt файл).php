<?php
    $str = `dir`;
    
    //echo iconv('CP866', 'UTF-8', $str).'<br />';
    
    //system('dir');
    
    $str = exec('dir');
    echo iconv('CP866', 'UTF-8', $str).'<br />';
    
    exec('E:\PHP\homework\2-Стандартные функции PHP\Дз.txt');
?>