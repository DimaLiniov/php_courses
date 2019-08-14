<?php
	class Point{
		public $x = 5;
		public $y = 3;
		public static $counter = 0;
		
		public function __construct($x,$y){
			$this->x = $x;
			$this->y = $y;
			self::$counter++;
		}
		
		public static function getCounter(){
			
			return self::$counter;
		}

		public function getX() {
			self::$counter++;
			return $this->x;
		}

		public function getY(){
			self::$counter++;
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
echo "<br> counter".Point::getCounter()."<br>";
	$value = new Point('2','2');
	print_r ($value);
	echo "<br> counter".Point::getCounter()."<br>";
	echo $value->x;
	echo $value->getx();
	echo "<br> counter".Point::getCounter()."<br>";
	echo $value->getX();
	echo "<br> counter".Point::getCounter()."<br>";
	echo $value->gety();
	echo "<br> counter".Point::getCounter()."<br>";
	/*class Math{
		private static $counter = 0;
		public static $z = 3.1415926;
		public static function cos($x){
			self::$counter++;
			return cos($x);
		}
		public static function PI_2(){
			self::$counter++;
			return self::$z/2;
		}
		public static function getCounter(){
			return self::$counter;
		}
	}
	echo Math::PI_2()."<br>";
	echo Math::cos(1/2)."<br>";
	echo Math::getCounter()."<br>";*/
?>
