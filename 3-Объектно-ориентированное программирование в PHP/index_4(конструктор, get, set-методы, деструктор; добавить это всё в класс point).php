<?php
	class Point{
		public $x;
		public $y;

		public function __construct($x,$y){
			$this->x = $x;
			$this->y = $y;
		}

		public function getX() {
			return $this->x;
		}

		public function getY(){
			return $this->y;
		}

		public function setX($x){
			$this->x=$x;
		}

		public function setY($y){
			$this->y=$y;
		}

		public function __destruct(){
			echo "объект удалён";
		}

	}
	$value = new Point('1','2');
	echo $value->x."<br>";
	echo $value->getY()."<br>";
	$value->setX('6');
	echo $value->getX()."<br>";
	$value->x = 5;
	$value->y = 3;
	echo $value->x." $value->y";

?>