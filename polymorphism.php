<?php


interface shape {
	// many uses of calcArea
	// this method has polymorphic uses
	public function calcArea();
}

class circle implements shape {
	private $radius;
	public function __construct($radius)
	{
		$this->radius = $radius;
	}
	public function calcArea()
	{
		return $this->radius*$this->radius*pi();
	}
}

class ractangle implements shape {
	private $width;
	private $height;
	public function __construct($width,$height)
	{
		$this->width = $width;
		$this->height = $height;
	}
	public function calcArea()
	{
		return $this->width*$this->height;
	}
}

$circ = new circle(3);
$ract = new ractangle(3,3);
echo $circ->calcArea()."<br>";
echo $ract->calcArea();