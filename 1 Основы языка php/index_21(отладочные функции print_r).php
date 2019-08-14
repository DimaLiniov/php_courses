<?php
	$arr = [[1, 2, 3, 4, 5 ],
    [ 2, 4, 6, 8, 10 ],
     [3, 6, 9, 12, 15 ]];
     print_r($arr);
     echo "<br>";
     function pre($arr){
     	echo "<pre>";
     	print_r($arr);
     	echo "</pre>";

     }
     pre($arr);
    /*$arr = [1, 3, 5, 10];
    foreach ($arr as &$v) $v *= 2;
    unset($v);
    
    //foreach ($arr as $v) echo $v." - ";
    
    print_r($arr);
    
    var_dump($arr, 5);
    var_export($arr);
    
    $d = array ( 0 => 2, 1 => 6, 2 => 10, 3 => 20, );
    print_r($d);*/
?>