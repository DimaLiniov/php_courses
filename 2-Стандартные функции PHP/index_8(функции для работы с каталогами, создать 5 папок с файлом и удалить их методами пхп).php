<?php 
	$random = uniqid();
	for ($i = 0; $i < 5 ; $i++) { 
		$folder = mkdir("$i$random");
		$file = fopen("$i$random/$random.txt", 'a+');
		fclose($file);
	}
    function deleteDir($random){
        for ($i = 0; $i < 5; $i++){
            unlink("$i$random/$random.txt");
            rmdir("$i$random");
        }
    }
    if(deleteDir($random) === NULL) echo 'Все директории удалены';
?>
<!-- <?php
    mkdir('new dir');
    rmdir('new dir');
    
    $arr = glob('*.php');
    print_r($arr);
    
    function printDir($folder, $space = '') {
        $files = scandir($folder);
        foreach ($files as $file) {
            if ($file == '.' || $file == '..') continue;
            $f = $folder.'/'.$file;
            echo $file."<br>";
            //echo $space.$file.'<br />';
            if (is_dir($f)) printDir($f, $space.'&nbsp;&nbsp;');
        }
    }
    echo '<br />';
    printDir('E:\films');
    
    echo file_exists('index.php');
?> -->