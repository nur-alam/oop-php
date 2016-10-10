<?php

// __get() is utilized for reading data from inaccessible properties

// __set() run when writing data to inaccessible properties

	class oop{

		public function describe()
		{
			echo "This is describe method </br>";
		}

		public function __get($udefine)
		{
			echo $udefine."</br>";
		}

		public function __set($key,$value)
		{
			echo "$key = $value"."</br>";
		}

		public function __call($key , $value)
		{
			echo $key." is not exist and Arguments : ".implode(',', $value) ;
		}

	}

	$obj = new oop();

	$obj->describe();

	$obj->Nuralam;

	$obj->name = "nur";

	$obj->notExistMethod('2','8','5');



?>
