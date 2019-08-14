<?php
    $im = imagecreatetruecolor(500, 500);
    
    $text = 'Hello World!';
    imageTtfText($im, 15, 50, 100, 100, imagecolorallocate($im, 255, 255, 0), 'fonts/times.ttf', $text);
    $text = 'Русский текст';
    imageTtfText($im, 15, 50, 100, 300, imagecolorallocate($im, 255, 255, 0), 'fonts/times.ttf', htmlentities($text));
    
    header('Content-Type: image/png');
    imagePng($im);
    imageDestroy($im);
?>