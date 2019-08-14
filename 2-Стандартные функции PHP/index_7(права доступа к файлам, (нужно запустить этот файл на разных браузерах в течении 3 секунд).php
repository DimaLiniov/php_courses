<?php
    $f = fopen(__FILE__, 'r');
    if (!flock($f, LOCK_EX | LOCK_NB)) {
        die('Script is already running');
    }
    echo fileowner('index_7.txt').'<br />';
    echo filegroup('index_7.txt').'<br />';
    echo decoct(fileperms('index_7.txt'));
    
    chown('index_7.txt', 1000);
    chmod('index_7.txt', 0755);
    sleep(3);
?>