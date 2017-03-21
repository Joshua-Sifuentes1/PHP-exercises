<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// -------------------------------------------------------------------------------

// Write a function called combine_arrays() that will take in two array values as parameters and return a new array with values from both.

// If the arrays have the same value at the same index, then it should only be added once.

// If the values differ, then the value from the first array should be added and then the second.

// The function will need to use at least two of the array functions we discussed: array_shift(), array_unshift(), array_push(), and array_pop().

// creating new array

function combineArrays($array1, $array2){
	$newArray = [];

	foreach($array1 as $key => $name) {

		if ($name == $array2[$key]) {

			array_push($newArray, $name);

		} else {

			array_push($newArray, $name);
			array_push($newArray, $array2[$key]);

		}
	}

	return $newArray;

}

print_r(combineArrays($names, $compare));

