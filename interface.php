<?php 


	interface one{
		public function methodOne();
	}

	interface two{
		public function methodTwo();
	}

	class oop implements one,two{

		public function __construct(){
			$this->methodOne();
			$this->methodTwo();
		}

		public function methodOne(){
			echo "This is methodOne from interface one"."</br>";
		}

		public function methodTwo(){
			echo "This is methodTwo from interface two";
		}

	}

	$obj = new oop();

	/*echo "</br>";

	$obj->methodTwo();*/
	

?>