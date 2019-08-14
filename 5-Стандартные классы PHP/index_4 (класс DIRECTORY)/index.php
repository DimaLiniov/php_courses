<?php
    $dir = dir('D:\курсы');
    print_r($dir);
    echo '<br />';
    while(($file = $dir->read()) !== false) {
        echo $file.'<br />';
    }
    $dir->close();


?>
<!-- <?php
    $dir = dir('W:\modules\conemu');
    print_r($dir);
    echo '<br />';
    while(($file = $dir->read()) !== false) {
        echo $file.'<br />';
    }
    $dir->rewind();
    while(($file = $dir->read()) !== false) {
        echo $file.'<br />';
    }
    $dir->close();
?> -->