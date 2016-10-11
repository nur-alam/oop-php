<?php 


class Java{

	private $phpAccess;

	function __construct(Php $phpAccess){

		$this->phpAccess = $phpAccess;

	}

	function anotherMethod(){

		$this->phpAccess->framework();
		$this->phpAccess->cms();

	}

}


class Php{

	public function framework()
	{
		echo "Laravel is a popular php framework. </br>";
	}

	public function cms()
	{
		echo "WordPress is popular php cms. </br>";
	}

}

$php = new Php();
$java = new Java($php);
$java->anotherMethod();
//echo $java->anotherMethod($php);

/*echo "</br>";

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


$cal->getValue($nums);*/




?>

<!-- 
Can not access passing instance object class.



When i catch class in an method i am getting error. When i call anotherMethod i got error like this.    img





See the bellow code. How can i solve this please help.

class Java{

    function anotherMethod(Php $phpAccess){
        $phpAccess->framework();
        $phpAccess->cms();
    }

}


class Php{

    public function framework()
    {
        echo "Laravel is a popular php framework. </br>";
    }

    public function cms()
    {
        echo "WordPress is popular php cms. </br>";
    }

}

$php = new Php();
$java = new Java($php);
echo $java->anotherMethod();



But when i catch class in an constructor then it's giving right output.See this code bellow.

class Java{

  function __construct(Php $phpAccess){
    $phpAccess->framework();
    $phpAccess->cms();
  }

}
 -->
