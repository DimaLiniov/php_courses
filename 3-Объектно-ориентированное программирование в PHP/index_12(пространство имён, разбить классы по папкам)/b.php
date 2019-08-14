<?php

namespace google;

trait CanFly {
        
        public function fly(){
            echo 'Полет самолета';
        }
    }
    class Aircraft{

       Use CanFly;
    }

?>