<?php  

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// construct a forEach loop that iterates through each value and outputs it's type integer, float, boolean, array, null, or string

foreach ($things as $thing){
	echo gettype($thing) . PHP_EOL;
}
?>