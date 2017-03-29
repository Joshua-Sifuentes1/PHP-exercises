<?php  


$testArray = ['e', 'a', 'g' ,'c' ,'i', 'd' ,'f', 'b', 'h'];

function sortIt($array) {
	// create a new array
	$newArray = [];

	$alphabet = range('a', 'z');
	
	foreach ($alphabet as $letter) {
		foreach ($array as $arrayLetter) {
			if ($letter == $arrayLetter) {
				array_push($newArray, $letter);
			}
		}
	}

	return $newArray;

}

print_r(sortIt($testArray));


// instructor example

function sortItAgain($array)
{
	$newArray = [];

	$alphabet = range('a', 'z');

	foreach ($alphabet as $letter) {
		$number = array_search($letter, $array);

		if (is_numeric($number) == true) {
			$newArray[] = $letter;
		}
	}
}


$testArray = ['e', 'a', 'g' ,'c' ,'i', 'd' ,'f', 'b', 'h'];

function removeVowels($array){
	
	$newArray = [];
	$vowelArray = ['a', 'e', 'i', 'o', 'u'];

	foreach ($array as $array) {
		# code...
	}
}













?>