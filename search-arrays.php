<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$nameSearch = 'Bob';

// Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.

function search($name, $array){

	$result = array_search($name, $array);

	if($result !== false) {
		return True;
	} else {
		return False;
	}
}

echo search($nameSearch, $names);

// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().

function compare($firstArray, $secondArray){
	$i = 0;
	foreach($firstArray as $name) {

		$result = array_search($name, $secondArray);
		
		if ($result !== false){
			$i++;
		}
	}
	return $i . PHP_EOL;
}
echo compare($names, $compare);

// instructor example

function compareArrays($listOfNames, $arrayToCompare){
	$i = 0;
	foreach($listOfNames as $name) {
		
		if (search($name, $arrayToCompare)){
			$i++;
		}
	}
	return $i . PHP_EOL;
}
echo compareArrays($names, $compare);

