<?php
function gener($start,$to,$step){
    for ($i = $start; $i < $to; $i++) {

            $cmd = yield $i;
            if ($cmd == -1) return 'Stop';
            if ($cmd == 10) $step = 1;
            $i = $i+$step-1;
        }
        return $to - $start;
}
$t = gener(1,16,2);
//echo $t->current();
while ($t->valid()) {
        echo $t->current().'; ';
        if ($t->current() >= 14) $t->send(-1);
        else if($t->current()==11) $t->send(10);
        else $t->next();
    }
    echo $t->getReturn();
    
//$t->next();
    echo $t->current();
?>
<!-- <?php
    function test($from, $to) {
        for ($i = $from; $i < $to; $i++) {
            $cmd = yield $i;
            if ($cmd == -1) return 'Stop';
        }
        return $to - $from;
    }
    
    $t = test(1, 7);
    print_r($t);
    echo '<br />';
    //foreach ($t as $v) echo $v.'; ';
    echo '<br />';
    
    while ($t->valid()) {
        echo $t->current().'; ';
        if ($t->current() == 6) $t->send(-1);
        $t->next();
    }
    echo '<br />';
    echo $t->getReturn();
?> -->