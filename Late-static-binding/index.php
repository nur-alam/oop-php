<?php 


class php{

	public static function framework()
	{
		echo static::getClass()."</br>";
	}

	public static function getClass()
	{
		return __CLASS__;
	}

}

class phpChild extends Php{

	public static function getClass()
	{
		return __CLASS__;
	}	
	
}

$obj = new php;
echo $obj::framework();

$obj2 = new phpChild;
echo $obj2::framework();


?>