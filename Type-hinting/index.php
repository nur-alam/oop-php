<?php 


class Java{

	function __construct(Php $phpAccess){
		$phpAccess->framework();
		$phpAccess->cms();
	}

}


class Php{

	public function framework()
	{
		echo "Laravel is popular php framework.";
	}

	public function cms()
	{
		echo "WordPress is php cms";
	}

}

$php = new Php;
new Java($php);


echo "</br>";

// example one of type-hinting 
class Calculation{

	public $a;

	public function getValue(array $nums)
	{
		foreach ($nums as $key => $value) {
			echo $value[0];
			echo " : ";
			echo $value[1] * $value[2]. "</br>";
		}
	}

}

$cal = new Calculation;

$nums = array(
	array('number one',10,20),
	array('number two',10,20)
);


$cal->getValue($nums);




?>