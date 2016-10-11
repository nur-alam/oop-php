<?php 


class TestClass{

	private $category;
	private $framework;

	function setCat($cat)
	{
		$this->category = $cat;
	}

	function getCat()
	{
		return $this->category;
	}

	function setframework($setFrame)
	{
		$this->framework = $setFrame;
	}

	function getFramework()
	{
		return $this->framework;
	}

}

$java = new TestClass;

$java->setCat("OOP");
$java->setframework("Spring");
/*echo $java->getCat()."</br>";
echo $java->getFramework()."</br>";*/

$php = clone $java;
$php->setCat('Structural');
$php->setframework("Laravel");

echo $java->getFramework()."</br>";
echo $java->getCat()."</br>";

echo $php->getFramework()."</br>";
echo $php->getCat()."</br>";



?>