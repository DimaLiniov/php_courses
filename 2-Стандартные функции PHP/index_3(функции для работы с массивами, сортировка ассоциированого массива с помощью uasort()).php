<?php
	$numbers = [mt_rand(1,10),mt_rand(1,10),mt_rand(1,10),mt_rand(1,10),mt_rand(1,10)];
	print_r($numbers).'<br>';
	shuffle($numbers);
	echo '<br>';
	foreach ($numbers as $number) {
    	print_r("$number ");
	}
    function mysort1($a,$b){
    	if ($a == $b) return 0;
    	return ($a > $b) ? 1 : -1;
    }	
	$staff = [
        [
            'age' => 30,
            'name' => 'B'
            
        ],
        [
            'age' => 26,
            'name' => 'C'
        ],
        [
            'age' => 20,
            'name' => 'A'
        ]
    ];
    echo '<br>';
    print_r($staff);
    echo '<br>';
	uasort($staff, 'mysort1');
	print_r($staff);
	foreach ($staff as $key => $value) {
		foreach ($value as $k => $v) {
			echo '<br>'."$k = $v";
		}
	}
?>
<!-- <?php
    $a = [[0, 1, 2, 3, 4, 5, 6, 7],[8, 9, 10, 11, 12, 13, 14, 15]];
    print_r($a);
    echo '<br />';
    //$a = array_unique($a);
    //print_r($a);
    
    /*
    $x = false;
    if (is_array($x)) foreach ($x as $v) echo $v;
    */
    echo '<br />';
    shuffle($a);
    print_r($a);
    echo '<br />';
    print_r(array_reverse($a));
    
    echo '<br />';
    //print_r(array_flip($a));
    
    echo '<br />';
    $a = ['name' => 'Igor', 'age' => '26'];
    print_r(array_values($a));
    
    echo '<br />';
    print_r(array_keys($a));
    
    echo '<br />';
    $list_1 = [5, 7, 8];
    $list_2 = [10, 8, 20];
    $list = $list_1 + $list_2;
    print_r($list);
    echo '<br />';
    $list = array_merge($list_1, $list_2);
    print_r($list);
    
    $list = range(1, 100);
    echo '<br />';
    //print_r($list);
    //for ($i = 0; $i < 100; $i++) echo 'Hello';
    //foreach(range(1, 100) as $v) echo 'Hello';
    
    $list = array_slice($list, 10, 5);
    print_r($list);
    shuffle($list);
    echo '<br />';
    print_r($list);
    echo '<br />';
    sort($list);
    print_r($list);
    echo '<br />';
    rsort($list);
    print_r($list);
    
    echo '<br />';
    $list = ['1' => 5, '2' => 0, '4' => 10, 'name' => 12];
    asort($list);
    print_r($list);
    echo '<br />';
    arsort($list);
    print_r($list);
    
    
    function mySort($a, $b) {
        if ($a % 10 == 0 && $b % 10 != 0) return 1;
        if ($a % 10 != 0 && $b % 10 == 0) return -1;
        return ($a <=> $b);
    }
    
    $list = [30, 40, 25, 20, 12, 15, 50, 40];
    uasort($list, 'mySort');
    echo '<br />';
    print_r($list);
?> -->