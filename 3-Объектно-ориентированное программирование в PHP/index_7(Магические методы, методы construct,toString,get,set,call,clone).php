<?php
	class Point{
		public $x = 5;
		public $y = 3;
		private $data = array();
		public static $counter = 0;

		
		public function __construct($x,$y){
			$this->x = $x;
			$this->y = $y;
			self::$counter++;
		}

		public function __toString(){
			$str ="Точка с координатами ($this->x $this->y)";
			return $str;
		}
		//вызывается когда обращаются к переменной, которая нет или private
		public function __get($name){
			if (isset($this->data[$name])) {
			 	return $this->data[$name];
			 }echo ' get Класс Point работает только в двумерном пространстве';
			
		}
		//чтобы была возможность установить значение свойства 
		public function __set($name, $val){
			$this->data[$name] = $val;
			echo 'set Класс Point работает только в двумерном пространстве';
			//echo " set Класс Point работает только в двумерном пространстве";
		}

		public function __call($name, $val){
			echo "вызов метода $name c такими аргументами: ";
			foreach ($val as $key => $value) {
				echo "$value, ";
			}

		public function __clone() {
            $this->t = clone $this->t;
        }
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

	}
	
	$value = new Point(5,3);
	$v = clone $value;
	$value->x = 4;
	$v->x = 3;
	echo "<br> $value->x $v->x <br>";
	$value2 = new Point(6,4);
	$value3 = new Point(7,5);
	echo $value."<br>".$value2."<br>".$value3."<br>";
	$value->z = 11;
	echo $value->x.'<br>';
	echo $value->getz("argument","5");

	
?>
