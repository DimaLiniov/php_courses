<?php 
    class Point {
        public $x = 1;
        public $y = 2;
        
        public function getX(){
            return $this->x;
        }

        public function getY(){
            return $this->y;
        }

        public function setX($x){
            $this->x=$x;
        }

        public function setY(){
            return $this->y=$y;
        }
    }
    $obj = new ReflectionClass('Point');
    echo "Имя класса: ".$obj->getName();
    // $ownProps = array_filter($obj->getProperties(), function($property) {
    // return $property->class == 'Point';}); 
    // print_r($ownProps);
    $objects=get_class_vars($obj->getName());
     foreach ($objects as $value=>$key) {
        echo "</br>".$obj->getProperty($value);
    }
    $g = get_class_methods($obj->getName());
    foreach ($g as $value) {
        echo "</br>".$obj->getMethod($value);
    }
    //echo '<br /><br />'.$obj->getMethod('getX');
    //echo "Имя класса: ".$obj->getName('x').'<br /><br />';
    // foreach ($obj->getX() as $name) {
    //     echo "Свойства класса: ".$obj->getProperty('$name').'<br /><br />';
    // }
   
    //$property =$obj->getProperty('x');
    //var_dump($property);

?>
<!-- <?php
    class User {
        
        public $x = 5;
        
        public function getX() {
            return $x;
        }
    }
    
    $obj = 'DateTime';
    $obj = new $obj(); // $obj = new DateTime();
    if ($obj instanceof DateTime) echo $obj->format('Y.m.d H:i:s');
    
    $rc = new ReflectionClass('ReflectionMethod');
    echo $rc.'<br /><br />';
    
    $rc = new ReflectionClass('User');
    echo $rc->getStartLine().'<br />';
    echo $rc->getEndLine().'<br />';
    $pr = $rc->getProperty('x');
    print_r($pr);
    echo '<br />';
    $m = $rc->getMethod('getX');
    print_r($m);
    echo '<br />';
?> -->