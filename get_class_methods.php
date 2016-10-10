<?php 


class TestClass{

	public function testMethod1(){

		echo "This is ".__FUNCTION__;

	}

	private function testMethod2(){

		echo "This is ".__FUNCTION__;

	}

	function __construct(){

		echo " '$'this inside TestClass : </br>";

		var_dump(get_class_methods($this));

		echo "TestClass inside TestClass : </br> ";

		var_dump(get_class_methods('TestClass'));

	}

}

$obj = new TestClass;

	echo " '$'this inside TestClass : </br>";

	var_dump(get_class_methods($obj));

	echo "TestClass inside TestClass : </br> ";

	var_dump(get_class_methods('TestClass'));

?>