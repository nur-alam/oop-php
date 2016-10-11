<?php 


$arr = array("HTML","CSS","PHP","JAVASCRIPT");

//$obj = new ArrayObject($arr);

//$obj->append("JAVA");

/*$iterator = $obj->getIterator();

while ($iterator->valid()) {
	echo $iterator->current()."</br>";
	$iterator->next();
}*/


$allarr = new ArrayIterator($arr);
$limit  = new LimitIterator($allarr,0,2);
foreach ($limit as $key => $value) {
	echo $key." => ".$value."</br>";
}



?>