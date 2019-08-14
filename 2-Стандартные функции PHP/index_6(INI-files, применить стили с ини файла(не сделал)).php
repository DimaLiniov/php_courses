<!doctype html>
<html>
  <head>
    <title>INI-FILES</title>
  </head>

  <body>
	<span style="<?php print_r($arr); ?>">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, accusantium.</span>
  </body>
</html>
<?php 
	$arr = parse_ini_file('index_6.ini');
	print_r($arr);
?>
<!-- <?php
    $arr = parse_ini_file('index_6.ini', true, INI_SCANNER_NORMAL);
    $arr = parse_ini_file('index_6.ini', true, INI_SCANNER_RAW);
    $arr = parse_ini_file('index_6.ini', true, INI_SCANNER_TYPED);
    
    print_r($arr);
    
    echo '<br />';
    echo $arr['Config']['site'];
?> -->