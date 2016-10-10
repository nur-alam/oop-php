<?php 


class person {

	public $name  = "nuralam";
	public $age   = "18";
	public $skill = "programming";
	private $email = "nuralam862@gmail.com";
	protected $password = "12345";

	public function iterator()
	{
		foreach ($this as $key => $value) {
			echo "$key => $value"."</br>";
		}
	}

}


$obj = new person;

echo "Outside class: </br> ";

foreach ($obj as $key => $value) {
	echo "$key => $value"."</br>";
}

echo "</br>";
echo "Inside class: </br> ";
echo "</br>";

$obj->iterator()


?>