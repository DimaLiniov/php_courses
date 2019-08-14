<?php

namespace ua;

trait CanMove {
        
        public function move(){
            echo 'Движение автомобиля';
        }
    }
class Car {
        
        Use CanMove;
    }
?>