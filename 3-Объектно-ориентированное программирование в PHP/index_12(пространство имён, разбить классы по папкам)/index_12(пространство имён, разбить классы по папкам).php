<?php
    use ua\Car;
    use google\Aircraft;
    require_once 'a.php';
    require_once 'b.php';

    $ob = new Car();
    echo $ob->move()."<br>";
    $ob = new Aircraft();
    echo $ob->fly();   
    // $user = new User();
    // $user->name = 'Michael';
    // echo $user->name.'<br />';
    
    // $g_user = new GoogleUser();
    // $g_user->email = 'abc@mail.ru';
    // echo $g_user->email.'<br />';
    
    // $user = new ru\google\User();
    // $user->email = '123@mail.ru';
    // echo $user->email.'<br />';
?>