<form action="index.php" method="GET" name="form">
	<select name="select" id="">
		<option value="<?=date('Y.m.d H:i:s',time()-7200)?>">GMT+1</option>
		<option value="<?=date('Y.m.d H:i:s',time()-3600)?>">GMT+2</option>
		<option value="<?=date('Y.m.d H:i:s',time())?>">GMT+3</option>
	</select>
	<input type="submit" value="OK">
</form>
<?php 
	echo "<br>Час у вибраному часовому поясі: ".$_GET['select']."<br><br>";
	$start = time(true); 
	$time = time() + mt_rand(1, 10) * 100;
	$rizn = $time - time() - 10800;
	echo $time."<br>";
	echo date('Y.m.d H:i:s',time())."<br>";
	echo date('Y.m.d H:i:s', $time)."<br>";
	echo date('H:i:s', $rizn);
	echo "<br>Время работы цикла: ".(microtime(true) - $start);
	
?>
<!-- <?php
    $start = microtime(true);
    echo $start.'<br />';
    $time = time();
    echo $time.'<br />';
    
    echo 'Текущее время: '.date('Z.d.m.Y H:i:s');
    
    $time = mktime(2, 0, 30, 5, 10, 2017);
    
    echo '<br />Получившееся дата и время: '.date('d.m.Y H:i:s', $time).'<br />';
    
    $time = strtotime('21.09.2018');
    echo $time.'<br />';
    echo date("Y.m.d", $time);
    
    $d = 29;
    $m = 2;
    $y = 2016;
    echo '<br />';
    if (checkdate($m, $d, $y)) echo 'Дата корректна';
    else echo 'Дата не корректна';
    
    function getGM($local) {
        $offset = date("Z", $local);
        return $local - $offset;
    }
    function getLM($gm, $offset) {
        return $gm + $offset;
    }
    
    echo '<br />';
    
    echo date('Y.m.d H:i:s', getGM(time()));
    echo '<br />';
    echo date('Y.m.d H:i:s', getLM(getGM(time()), 3600 * 2));
    
    echo '<br />Время работы скрипта: '.(microtime(true) - $start);
?> -->