<?php
class EmptyException extends Exception{


}
class LongException extends Exception{

}
class InvalidException extends Exception{

}

	$reg = '#\w*@#';
	try{
		$email='sdfkm@asdsmadnsa';
		if (!$email) throw new EmptyException('E-mail не указан');
		if (preg_match($reg, $email) == false) throw new InvalidException('неверный E-mail(нету @)');
		if (strlen($email)>10) throw new LongException('Слишком длинный E-mail(>10 symbols)');
		else echo $email;
	} catch (Exception $e){
		if ($e instanceof EmptyException) echo 'Это исключение EmptyException';
        elseif ($e instanceof LongException) echo 'Это исключение LongException';
        elseif ($e instanceof InvalidException) echo 'Это исключение InvalidException';
        
        echo '<br />'.$e->getMessage();
	}

\
    // try {
    //     throw new Exception('Error message', 1);
    // } catch (Exception $e) {
    //     echo $e->getMessage().'<br />';
    //     echo $e->getCode().'<br />';
    //     echo $e->getFile().'<br />';
    //     echo $e->getLine().'<br />';
    //     print_r($e->getTrace());
    //     echo '<br />';
    //     echo $e->getTraceAsString().'<br />';
    // }
    
    // function test1() {
    //     throw new Exception('Error message', 1);
    // }
    
    // function test2() {
    //     test1();
    // }
    
    // try {
    //     test2();
    // } catch (Exception $e) {
    //     echo $e->getTraceAsString().'<br />';
    // }
    
    // class FileException extends Exception {
        
    // }
    
    // class NameException extends Exception {
        
    //     public function __construct(int $code) {
    //         parent::__construct('', $code);
    //     }
    // }
    
    // try {
    //     $name = '555';
    //     $file = 'a.txt';
    //     if (!$name) throw new NameException(1);
    //     if (!file_exists($file)) throw new FileException('Файл не существует', 1);
    // } catch (Exception $e) {
    //     if ($e instanceof NameException) echo 'Это исключение NameException';
    //     elseif ($e instanceof FileException) echo 'Это исключение FileException';
    //     echo '<br />'.$e->getCode();
    // }
?>