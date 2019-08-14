<?php
	$arr = [1,2,3,4,5,6,7,8,9];
	$anon = function($arr)
	{
		$sum = 0;
		foreach ($arr as  $value) {
			$sum += $value; 
		}
		$srznach=$sum/count($arr);
		return $srznach;
	};
	//echo $anon($arr);
	function gener($arr, $srznach) {
		foreach ($arr as $value) {
			echo "<br>".$value." среднее значение - $srznach";
			
		}
	}
	gener($arr,$anon($arr));

    // function gener1() {
    //     echo '1';
    //     yield 1;
    //     echo '2';
    //     yield 2;
    //     echo '3';
    //     yield 3;
    // }
    
    // foreach (gener1() as $value) {
    //     echo " - из цикла $value<br />";
    // }
    // echo '<br />';
    // function gener2($from, $to) {
    //     for ($i = $from; $i < $to; $i++) {
    //         echo "$i - ";
    //         yield $i;
    //     }
    // }
    
    // foreach (gener2(1, 10) as $value) {
    //     echo 'Удвоим: '.($value * $value).'<br />';
    // }
    
    // function doubleArray($arr, $callback) {
    //     foreach ($arr as $v) yield $callback($v);
    // }
    
    // $arr = [1, 2, 3, 4, 5, 6];
    // $gener = doubleArray($arr, function($v) {return $v * 2;});
        
    // /* $gener - это НЕ массив!!! */
    
    // foreach ($gener as $v) echo "$v - ";
    
    // $arr = ['Michael' => '27', 'Igor' => '20'];
    // function gener3($arr, $callback) {
    //     foreach ($arr as $k => $v) {
    //         yield $k => $callback($v);
    //     }
    // }
    
    // $gener = gener3($arr, function ($age) {return ($age < 23)? "student" : "worker";});
    
    // echo '<br />';
    // foreach ($gener as $key => $value) echo "$key - $value<br />";
    
    // /* Генераторы - это отличная возможность сэкономить ресурсы */
    
    // echo '<br />';
    // $count = 1000000;
    // $arr = [];
    // for ($i = 0; $i < $count; $i++) $arr[] = $i;
    // $s = 0;
    // foreach ($arr as $v) $s += $v;
    // echo "Result: $s<br />";
    // echo memory_get_usage().'<br />';
    // unset($arr);
    // function ememory($count) {
    //     for ($i = 0; $i < $count; $i++) yield $i;
    // }
    
    // $s = 0;
    // foreach (ememory($count) as $v) $s += $v;
    
    // echo "Result: $s<br />";
    // echo memory_get_usage().'<br />';
    
?>