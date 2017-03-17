<?php  

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// construct a forEach loop that iterates through each value and outputs it's type integer, float, boolean, array, null, or string

// foreach ($things as $thing){
// 	echo gettype($thing) . PHP_EOL;
// }

// create a foreach loop that outputs values that are only Scalar type
// foreach ($things as $thing) {
	
// 	if (is_scalar($thing)){
// 		echo $thing . PHP_EOL;
// 	}
// }


foreach ($things as $thing) {

	if (is_array($thing)){
		echo "Array ( ";
		foreach ($thing as $nestedArray) {
			echo $nestedArray . ", ";
		} 
		echo ")" . PHP_EOL;
	} else {
		echo $thing . PHP_EOL;
	}
}