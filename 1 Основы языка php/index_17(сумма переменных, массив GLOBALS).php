<?php
    $first = 12;
    $second = 8;
    $sum = 0;
    function getSum()
    {
        $sum = $GLOBALS['first'] + $GLOBALS['second'];
        echo $sum;
        return $sum ;

    }
    getSum();
    /*$x = 5;
    function func($x) {
        $a = 8;
        $x++;
    }
    function testGlobal() {
        global $x;
        $x++;
        
    }
    function getCount() {
        static $count = 0;
        $count++;
        return $count;
    }
    func(10);
    echo $x;
    echo '<br />';
    //echo $a;
    testGlobal();
    echo $x;
    $a = 7;
    $var = 10;
    echo '<br />';
    foreach ($GLOBALS as $key => $value) {
        if (is_array($value)) continue;
        echo "$key = $value;<br />";
    }
    
    echo getCount().'<br />';
    echo getCount().'<br />';
    echo getCount().'<br />';*/
?>