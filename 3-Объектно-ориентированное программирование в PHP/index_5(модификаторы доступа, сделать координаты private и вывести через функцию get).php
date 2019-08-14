<?php
	class Point{
		private $x = 5;
		private $y = 3;

		
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
	$value = new Point();
	$value->setx(1);
	$value->sety(2);
	echo $value->getX();
	echo $value->getY();
?>