<?php 


abstract class person{

	public $name = "nur";
	public $age = 22;

	public function details(){
		echo $this->name." is ".$this->age." years old </br>";
	}

	abstract public function prog();

}

class child extends person{

	public function describe(){
		return parent::details();
	}

	public function prog(){
		echo $this->name." like to do programming";
	}

}

$obj = new child();

$obj->describe();
echo "</br>";
$obj->prog();


?>