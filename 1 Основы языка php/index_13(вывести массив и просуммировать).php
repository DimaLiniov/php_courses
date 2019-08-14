<?php
	$sum = 0;
    $arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    for ($i = 0; $i < count($arr); $i++) {
    	echo $arr[$i].' ';
    	$sum += $arr[$i];
    }
    echo "<br>".$sum."<br>";
    $i = 0;
    while ( $i < count($arr)) {
    	echo $arr[$i].' ' ;
    	$i++;
    }

?>