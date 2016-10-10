<?php 

trait Java{

	public function javaCoder()
	{
		echo "I love Java </br>";
	}

}

trait Php{

	public function phpCoder()
	{
		echo "I love Php </br>";
	}

}

trait JavaPhp{
	use java,php;
}

class TestClass{
	use JavaPhp;
}


$obj = new TestClass;
$obj->javaCoder();
$obj->phpCoder();

?>