<?php 
// tutorial about __clone magic method
//http://www.sunilb.com/php/php5-oops-tutorial-magic-methods-__clone-method

class Order{

	private $order_id;
	private $customer;

	public function setOrderId($order_id)
	{
		$this->order_id = $order_id;
	}

	public function getOrderId()
	{
		return $this->order_id;
	}

	public function setCustomer(Customer $customer)
	{
		//$customer->setName('sunil');
		//echo $customer->getName()."</br>";
		$this->customer = clone $customer;
		$this->customer->setName('nur');
		echo $this->customer->getName()."</br>";
	}

/*	public function __clone()
	{
		$o = new Order();
		//$o->setOrderId($this->order_id);
		//$this->customer = clone $this->customer;
		$o->setCustomer($this->customer);
		return $o;
	}*/

}



class Customer{

	private $name;

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

/*	public function __clone()
	{
		$c = new Customer();
		$c->setName($this->name);
		return $c;
	}*/

}



$c1 = new Customer();
$c1->setName('bir');


$c2 = new Order();
$c2->setCustomer($c1)."</br>";
echo $c1->getName()."</br>";

/*$c1->setName('nur');

$c2 = clone $c1;
$c2->setName('alam');

echo $c1->getName()."</br>";
echo $c2->getName()."</br>";*/


?>