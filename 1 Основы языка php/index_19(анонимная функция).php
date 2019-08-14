<?php
	$hello = function($a, $b)
    {	
    	/*echo $a+$b."<br>";*/
        return $a + $b;
    };
    echo $hello(5,5);
    /*$hello = function($string)
    {
        echo "$string<br />";
    };
    $hello('World');
    echo gettype($hello);
    echo '<br />';
    function test($a, $func) {
        $arr = [];
        for ($i = 0; $i < $a; $i++) {
            $arr[] = $func($i);
        }
        return $arr;
    }
    
    $arr = test(10, function($x) {
        return $x * $x;
    });
    
    foreach ($arr as $v) echo $v.", ";*/
?>