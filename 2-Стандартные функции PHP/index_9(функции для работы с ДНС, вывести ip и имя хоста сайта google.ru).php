<?php
    $ip_address = gethostbyname('google.ru');
    echo $ip_address.'<br />';
    $hostname = gethostbyaddr($ip_address);
    echo $hostname.'<br />';
?>