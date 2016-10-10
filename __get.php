<?php 
// __get method catch a undefine variable
	class oop{

		public $name;

		public function describe()
		{
			echo "This is describe method </br>";
		}

		public function __get($udefine)
		{
			echo $udefine;
		}

	}

	$obj = new oop();

	$obj->describe();

	$obj->Nuralam;


?>