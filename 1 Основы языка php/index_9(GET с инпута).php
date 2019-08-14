<?php

    $val = $_GET['subject']?? false;
    if ($val>30) {
        echo "Вам больше 30 лет";
    } else echo 'Вам меньше 30'
?>

<div>
    <form name="form" action="index.php" method="GET">
  <input type="text" name="subject" id="subject" placeholder="Ваш возраст" value="">
  <input type="submit" value="Submit">
</form>
</div>
