<?php 


class oop{
	
	public function __destruct()
	{
		echo "destruct calling now.";
	}

	public function __construct($name,$age){
		$this->name = $name;
		$this->age = $age;
		echo $name."</br>";
	}

}

$contstructor = new oop('nur',23);
//unset($contstructor);
//$contstructor->setName('nuralam');



?>