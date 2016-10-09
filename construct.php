<?php 


class oop{
	
	public $name;
	public $age;

	public function __construct($name,$age){
		$this->name = $name;
		$this->age = $age;
	}

	public function details(){
		echo "His name is {$this->name} and age is {$this->age}.";
	}

	public function destruct()
	{
		echo "destruct calling now.";
	}

}

$contstructor = new oop('nur',23);

$contstructor->details();





?>