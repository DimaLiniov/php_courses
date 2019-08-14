<?php 
    $im = imagecreatetruecolor(600, 500);
    $color = imageColorAllocate($im, 100, 150, 20);
    imageArc($im, 300,150, 50, 60, 0, 360, $color);
    imageRectangle($im, 295, 180, 305, 190, $color);
    imageArc($im, 300,240, 70, 100, 0, 360, $color);
    imageLine($im, 290, 287, 290, 380, $color);
    imageLine($im, 310, 287, 310, 380, $color);
    imageLine($im, 290, 380, 300, 380, $color);
    imageLine($im, 310, 380, 320, 380, $color);
    imageLine($im, 300, 215, 360, 280, $color);
    //imageArc($im, 295,145, 8, 15, 0, 360, $color);
    imageArc($im, 310,145, 13, 8, 0, 360, $color);
    imageArc($im, 320,163, 20, 8, 100, 180, $color);
    header('Content-Type: image/png');
    imagePng($im);
    imagePng($im, 'image2.png');//сохранить изображение
 ?>
<!-- <?php
    $im = imagecreatetruecolor(500, 500);
    
    $color = imageColorAllocate($im, 100, 150, 20);//цвет РГБ
    
    imageSetThickness($im, 2);//толщина контура
    imageRectangle($im, 5, 5, 150, 200, $color);//прямоугольник
    
    imageFilledRectangle($im, 160, 20, 240, 210, $color);// заполненый прямоугольник
    
    imageLine($im, 20, 210, 10, 300, imageColorAllocate($im, 255, 110, 110));//линия
    
    imageArc($im, 50, 220, 100, 150, 0, 350, $color); //дуга
    
    $points = [];
    $points[] = 50;
    $points[] = 150;
    $points[] = 150;
    $points[] = 220;
    $points[] = 250;
    $points[] = 270;
    $points[] = 350;
    $points[] = 120;
    $points[] = 250;
    $points[] = 120;
    $points[] = 100;
    $points[] = 200;
    
    imagePolygon($im, $points, 5, imageColorAllocate($im, 255, 0, 0));//многоугольник
    //imageFilledPolygon($im, $points, 5, imageColorAllocate($im, 255, 0, 0));
    
    imageSetPixel($im, 400, 50, $color);//точка
    
    $color = imageColorAt($im, 400, 50);//узнать цвет пикселя по координатам
    //print_r(imageColorsForIndex($im, $color));
    
    $color = imageColorAllocateAlpha($im, 255, 0, 0, 100);
    imageFilledRectangle($im, 180, 20, 300, 180, $color);
    
    imageCopyResized($im, $im, 250, 250, 0, 0, 220, 220, 100, 150);//скопировать фигуру
    
    imageFill($im, 70, 190, imageColorAllocate($im, 255, 255, 255));//закрасить область, в которой находится точка
    
    $tile = imagecreatefromjpeg('t.jpg');
    imageSetTile($im, $tile);
    imageFill($im, 70, 130, IMG_COLOR_TILED);//закрасит область текстурой
    
    header('Content-Type: image/png');
    imagePng($im);
    imagePng($im, 'image.png');//сохранить изображение
    imageDestroy($tile);
    imageDestroy($im);
?> -->