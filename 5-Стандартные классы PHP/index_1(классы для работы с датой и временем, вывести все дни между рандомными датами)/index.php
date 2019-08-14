<?php
	$d = mt_rand(1,28);
	$m = mt_rand(1,12);
	$y = mt_rand(2017,2018);
	$h = mt_rand(1,24);
	$i = mt_rand(1,60);
	$date_1 = new DateTime("$d-$m-$y $h:$i:$i"); 
	echo $date_1->format('d.m.Y H:i:s').'<br />';
	$d = mt_rand(1,28);
	$m = mt_rand(1,12);
	$y = mt_rand(2017,2018);
	$h = mt_rand(1,24);
	$i = mt_rand(1,60);
	$date_2 = new DateTime("$d-$m-$y $h:$i:$i"); 
	echo $date_2->format('d.m.Y H:i:s').'<br />';
	$interval = $date_2->diff($date_1);
	echo "<br />ТЕСТ ".$interval->d."<br />";
	echo "Разница в месяцах: $interval->m в днях: $interval->d в часах: $interval->h в минутах: $interval->i".'<br>';
    print_r($interval);
    $interval_2 = new DateInterval('P1D');
    $period = new DatePeriod($date_2, $interval_2, $interval->d+($interval->m*30));
    echo "<br />ТЕСТ ".$interval->m."<br />";
    foreach ($period as $datetime) echo $datetime->format('d.m.Y H:i:s').'<br />';
    // $date = new DateTime();
    // echo $date->format('d.m.Y H:i:s').'<br />';
    // $date = new DateTime('2017-05-20 12:05:50');
    // echo $date->format('d.m.Y H:i:s').'<br />';
    // $date->setDate(2018, 7, 25);
    // $date->setTime(23, 15, 20);
    // echo $date->format('d.m.Y H:i:s').'<br />';
    // $date->setTimezone(new DateTimeZone('Europe/Moscow'));
    // echo $date->getTimezone()->getOffset($date).'<br />';
    
    // $date_1 = new DateTime();
    // $date_2 = new DateTime('2017-05-20 12:05:50');
    // $interval = $date_2->diff($date_1);
    // print_r($interval);
    // echo '<br />'.$interval->days.'<br />';
    
    // $interval = new DateInterval('P2Y1M5DT5H10M15S');
    
    // $date_1->add($interval);
    // echo $date_1->format('d.m.Y H:i:s').'<br />';
    
    // $date = new DateTime();
    // $interval = new DateInterval('PT1H');
    // $period = new DatePeriod($date, $interval, 20);
    // foreach ($period as $datetime) echo $datetime->format('d.m.Y H:i:s').'<br />';
?>