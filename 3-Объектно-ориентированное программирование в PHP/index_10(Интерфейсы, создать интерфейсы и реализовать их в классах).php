<?php
	interface CanMove {
		
		public function move();
	}

	interface CanFly {
		
		public function fly();
	}

	class Car implements CanMove{
		
		public function move(){
			echo 'Движение автомобиля';
		}
	}

	class Aircraft implements CanFly{

		public function fly(){
			echo 'Полет самолета';
		}
	}
	$ob = new Car();
	echo $ob->move()."<br>";
	$ob = new Aircraft();
	echo $ob->fly();
	
    // interface Draw {
        
    //     public function draw();
        
    // }
    
    // abstract class Shape implements Draw {
        
    //     protected $x;
    //     protected $y;
        
    //     public function __toString() {
    //         return print_r($this, true);
    //     }
        
    // }
    
    // class Circle extends Shape {
        
    //     private $r;
        
    //     public function __construct($x, $y, $r) {
    //         $this->x = $x;
    //         $this->y = $y;
    //         $this->r = $r;
    //     }
        
    //     public function draw() {
    //         echo 'Рисуем окружность с координатами центра '.$this->x.' и '.$this->y;
    //         echo '<br />Радиус '.$this->r;
    //     }
        
    // }
    
    // class Rectangle extends Shape {
        
    //     private $w;
    //     private $h;
        
    //     public function __construct($x, $y, $w, $h) {
    //         $this->x = $x;
    //         $this->y = $y;
    //         $this->w = $w;
    //         $this->h = $h;
    //     }
        
    //     public function draw() {
    //         echo 'Рисуем прямоугольник с координатами левого верхнего угла '.$this->x.' и '.$this->y;
    //         echo '<br />Ширина '.$this->w.', Высота '.$this->h;
    //     }
    // }
    
    // $circle = new Circle(5, 8, 10);
    // $rect = new Rectangle(20, 20, 40, 10);
    // $r = new Rectangle(210, 220, 430, 102);
    // $list = [$circle, $rect, $r];
    // foreach ($list as $l) {
    //     //if ($l instanceof Circle) $l->drawCircle();
    //     //elseif ($l instanceof Rectangle) $l->drawRect();
    //     $l->draw();
    //     echo '<br />';
    // }
?>