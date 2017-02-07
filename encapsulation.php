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


$obj1 = new superClass('nur','23');
$obj2 = new superClass('nur',null);

// output maintain the encapsulation 
var_dump($obj1);
var_dump($obj2);