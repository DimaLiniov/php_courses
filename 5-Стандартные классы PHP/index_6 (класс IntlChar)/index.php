<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
   td {
    border: 2px double black; /* Параметры границы */
    background: #daa520; /* Цвет фона */
    padding: 10px; /* Поля вокруг текста */
   }
  </style>
</head>
<body>
    <table>
        <?php
    $start = 33;
    $end = 100;

  
        
        for ($i=$start; $i < $end; $i++) { 
            echo "<tr><td>".$i."</td>";
            echo "<td>".IntlChar::chr($i)."</td></tr>";
        }
        
         ?>
    
</table>
</body>
</html>
 

<?php
    
?>
<!-- <?php
    echo IntlChar::ord('N').'<br />';
    echo IntlChar::chr(1070).'<br />';
    echo IntlChar::isalnum('5').'<br />';
    echo IntlChar::isalnum('v').'<br />';
    echo IntlChar::isalnum(' ').'<br />';
    echo IntlChar::isalpha('5').'<br />';
    echo IntlChar::ispunct(',').'<br />';
    echo IntlChar::isspace(' ').'<br />';
    echo IntlChar::islower('d').'<br />';
    echo IntlChar::islower('D').'<br />';
    echo IntlChar::isupper('d').'<br />';
    echo IntlChar::isupper('D').'<br />';
?> -->