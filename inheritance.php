<?php 

class superClass{

	public $name;
	public $age;

	public function __construct($name,$age)		
	{

		$this->name = $name;
		$this->age = $age;

	}

	public function display()
	{

		echo "Name is {$this->name} and age is {$this->age} ";

	}

}

class childClass extends superClass{

	public $studied_at = 'software engineering';

	public function display()
	{

		echo "Name is {$this->name} and age is {$this->age} and studied at {$this->studied_at}";

	}

}

$obj1 = new superClass('nur','23');

$obj1->display();

echo "</br>";

$obj2 = new childClass('alam','22');

$obj2->display();

echo "</br>";

if($obj2 instanceof superClass){
	echo "yes inherited";
}


?>