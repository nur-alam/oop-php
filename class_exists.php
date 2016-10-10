<?php 

		
	class TestClass{

		public function testMethod()
		{
			echo "This is ".__FUNCTION__." of ".__CLASS__;
		}

	}

	if(class_exists('TestClass')){

		$obj = new TestClass;

		if(method_exists($obj, 'testMethod')){

			$obj->testMethod();

		}else{

			echo "Method is no exist.";
			
		}

	}else{

		echo "Class not exist";

	}



?>