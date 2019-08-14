<?php
    trait CanMove {
        
        public function move(){
            echo 'Движение автомобиля';
        }
    }

    trait CanFly {
        
        public function fly(){
            echo 'Полет самолета';
        }
    }

    class Car {
        
        Use CanMove;
    }

    class Aircraft{

       Use CanFly;
    }
    $ob = new Car();
    echo $ob->move()."<br>";
    $ob = new Aircraft();
    echo $ob->fly();
    // trait Id {
        
    //     protected $id;
        
    //     public function getId() {
    //         return $this->id;
    //     }
        
    //     public function setId($id) {
    //         $this->id = $id;
    //     }
        
    // }
    
    // trait Name {
        
    //     protected $name;
        
    //     public function getName() {
    //         return $this->name;
    //     }
        
    //     public function setName($name) {
    //         $this->name = $name;
    //     }
        
    // }
    
    // class User {
        
    //     use Id, Name;
    // }
    
    // class Cat {
        
    //     use Id, Name;
    // }
    
    // class Article {
        
    //     use Id;
    // }
    
    // $user = new User();
    // $user->setId(10);
    // $user->setName('Michael');
    // echo $user->getId().'<br />';
    // echo $user->getName();
?>