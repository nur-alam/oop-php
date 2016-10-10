<?php 


// __autoload magic method
/*	function __autoload($class_name){
		include "class/".$class_name.".php";
		echo $class_name."</br>";
	}*/

	spl_autoload_register(function($class_name){
		include "class/".$class_name.".php";
	});


	$cal  =  new calculator;

	echo $cal->getValue(2,3)->getResult();


?>