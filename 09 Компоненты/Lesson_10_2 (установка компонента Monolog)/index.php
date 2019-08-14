<?php
    require_once 'vendor/autoload.php';
    
    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    // create a log channel
    $log = new Logger('name');
    $log->pushHandler(new StreamHandler('path/to/your.log', Logger::WARNING));
    
    $x = 5;
    $y = 0;
    
    if ($y == 0) $log->warning('Деление на ноль');
    else $r = $x / $y;

?>