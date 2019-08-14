<?php 

	//namespace ua\oop_car;
	set_include_path(get_include_path());
	spl_autoload_extensions('.php');
	spl_autoload_register();
	//use ua\CanMove;
	class Car{
		use CanMove;
	}

?>