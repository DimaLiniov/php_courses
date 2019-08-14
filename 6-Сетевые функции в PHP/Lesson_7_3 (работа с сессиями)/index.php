<?php
session_start();
if(!empty($_POST['color']))$_SESSION['color'] = $_POST['color'];
if(isset($_SESSION['color'])){
 	echo "<style> body {background:".$_SESSION['color']."} </style>";
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
    session_start();
    $counter = $_SESSION['counter']?? 0;
    $counter++;
    $_SESSION['counter'] = $counter;
    print_r($_COOKIE);
    //unset($_SESSION['counter']);
    echo $counter;
?> -->