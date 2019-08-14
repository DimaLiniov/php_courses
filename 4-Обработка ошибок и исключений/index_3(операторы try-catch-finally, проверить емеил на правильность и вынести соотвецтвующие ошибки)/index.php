<?php
	class Valid{
		public $email;
		public function validEmail($email){
			$reg = '#\w*@#';
			if (!$email) throw new Exception('E-mail не указан');
			else if (preg_match($reg, $email) == false) throw new Exception('неверный E-mail(нету @)');
			else if (strlen($email)>10) throw new Exception('Слишком длинный E-mail(>10 symbols)');
			else echo "<br>".true;
				$this->email = $email;

		}
	}
	$mail=new Valid();
	
	try{
	$mail->validEmail('');
	} catch (Exception $e){
		echo 'Invalid email: '.$e->getMessage();
	}

	try{
	$mail->validEmail('dsfn');
	} catch (Exception $e){
		echo "<br>".'Invalid email: '.$e->getMessage();
	}
	
	try{
	$mail->validEmail('ddfdsfqser2@');
	} catch (Exception $e){
		echo "<br>".'Invalid email: '.$e->getMessage();
	}

	//echo "<br>".$mail->email;

    // try {
    //     $email = 'abc@mail.ru';
    //     if (!true) throw new Exception('My Error');
    //     echo 'Мы прошли проверку успешно!';
    // } catch (Exception $e) {
    //     echo 'Возникла ошибка: '.$e->getMessage();
    // }
    // finally {
    //     echo '<br />Тут блок finally';
    // }
    
    // class User {
    //     private $name;
        
    //     public function setName($name) {
    //         if (!$name) throw new Exception('Invalid name');
    //         $this->name = $name;
    //     }
        
    // }
    
    // $user = new User();
    // $user->setName('Igor');
    // try {
    //     $user->setName('');
    // } catch (Exception $e) {
    //     echo '<br />Возникла ошибка: '.$e->getMessage();
    // }
?>