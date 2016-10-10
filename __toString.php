<?php 


	class TestClass{

		private $name = "magic php";

		private $tagname = "Web Developer's blog";

/*		public function __toString()
		{
			return $this->name . " - " . $this->tagname;
		}*/
		public function __toString()
		{
			return "You are not allowed to access the Object of this class";
		}

	}

	$obj = new TestClass();


	//echo (string)$obj;
	echo $obj;


?>