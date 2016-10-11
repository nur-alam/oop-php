<?php 


class TestClass{

	public $rubi;
	public $js;
	public $php;
	public $python;
	protected $java;

	function __construct(){
		$this->rubi = "I didn\'t code in rubi anytime";
		$this->js   = "I love frontend technology";
		$this->php  = "I do code in pph";
		$this->python = "I will learn python quickly.";
		$this->java = "Once upon a time i do code in java";
	}

}

$obj = new TestClass;
$serial = serialize($obj);
file_put_contents("serialize.txt", $serial);

$getcont = file_get_contents("serialize.txt");
$unserial = unserialize($getcont);

var_dump($unserial);

?>