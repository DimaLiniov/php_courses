<?php
	$arr = [
        [
            'name' => 'Micahel',
            'age' => 26
        ],
        [
            'name' => 'Igor',
            'age' => 30
        ],
        [
            'name' => 'Alex',
            'age' => 20
        ]
    ];
    $sum = 0;
    foreach ($arr as $key => $value) {
    	foreach ($value as $k => $v) {
    		if ($k == 'age'){
    			$sum += $v / count($arr);}
    	}
    }
    echo $sum;
   /* $arr = [1, 5, 0, true, false, 'MyString', 2.5];
    foreach ($arr as $value) {
        echo $value.'<br />';
    }
    
    $arr_1 = [
        [
            'name' => 'Micahel',
            'age' => 26
        ],
        [
            'name' => 'Igor',
            'age' => 30
        ],
        [
            'name' => 'Alex',
            'age' => 20
        ]
    ];
    
    foreach ($arr_1 as $key => $value) {
        echo $key.' - ';
        foreach ($value as $k => $v) {
            echo "$k = $v, ";
        }
        echo '<br />';
    }
    
    $arr = [];
    for ($i = 0; $i < 100; $i++) {
        $arr[] = $i * 5;
    }
    
    foreach ($arr as $value) {
        echo $value.', ';
    }
    echo '<br />';
    
    foreach ($arr as $key => $value) {
        $arr[$key] = $value * 2;
    }
    
    foreach ($arr as $value) {
        echo $value.', ';
    }
    echo '<br />';
    
    foreach ($arr as &$value) {
        $value *= 2;
    }
    
    foreach ($arr as $value) {
        echo $value.', ';
    }
    echo '<br />';*/
?>