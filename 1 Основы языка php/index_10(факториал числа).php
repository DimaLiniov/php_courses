<div>
    <form name="form" action="index.php" method="GET">
        <input type="text" name="subject" placeholder="Введите число, факториал которого хотите взять" value="">
        <input type="submit" value="Submit">
</div>
<?php
$factorial = 1;
$fac = $_GET['subject']?? false;
    if ($fac<1) {
        echo "Число должно быть >= 1";
    } else if($fac>=1) {
        for ($i = 1; $i <= $fac; $i++ ){$factorial *= $i;
            if ($i < $fac) continue;
            echo "$factorial <br>";}
    }
?>
