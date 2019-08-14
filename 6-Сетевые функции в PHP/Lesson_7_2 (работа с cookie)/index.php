<?php
if(!empty($_POST['color']))setcookie('color',$_POST['color'],time()+3600);
if(isset($_COOKIE['color'])){
 	echo "<style> body {background:".$_COOKIE['color']."} </style>";
 }
?>
<form action="index.php" method="post">
	<select name="color" >
  <option value="red">RED</option>
  <option value="green">GREEN</option> 
  <option value="blue">BLUE</option> 
</select>
    <p><input type="submit" value="Change background"></p>
 </form> 
<!-- <?php
    $counter = 0;
    if (isset($_COOKIE['counter'])) {
        $counter = $_COOKIE['counter'];
        $counter++;
    }
    setcookie('counter', $counter, time() + 10);
    echo $counter;
?> -->