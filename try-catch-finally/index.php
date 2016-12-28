<?php 


function inverse($x){
	if(!$x){
		throw new Exception("agument should be greater than 0.", 0);
	}
	return 1/$x;
}

try {
	echo inverse(0)."\n";
} catch(Exception $e){
	//echo "Caught exception:", $e->getMessage(),"\n";
	echo 'Caught exception: ',  $e->getMessage(), "<br>";
} finally{
	echo "Finally block trigger everytime.";
}