<?php
    function func($a, $b) {
        if ($b <= 0) return 1;
        return $a * func($a , $b - 1); 
    }
    echo func(2 , 3);
?>