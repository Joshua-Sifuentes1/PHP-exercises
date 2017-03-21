<?php

// Converts array into list n1, n2, ..., and n3
function humanizedList($array) {
	$lastIndex = array_pop($array);
	$lastIndex = "and $lastIndex";
	array_push($array, $lastIndex);
	return implode(", ", $array);

}

// instructor example
// -------------------------------------------------------------------------

function humanizedListSort ($array, $sortNames = false)
{
	if ($sortNames == true) {
		sort($array);
	}

	$output = "";
	$lastValue = array_pop($array);
	$output = implode(", ", $array);
	$output .= ", and $lastValue";

	return $output;
}

function humanizedFirstNameList ($array) {
	$output = "";

	//eliminate Last name

	$names = implode(" ", $array);
	$namesArray = explode(" ", $names);
	$firstNamesArray = [];
	for ($i = 0; $i < count($namesArray); $i += 2) {
		array_push($firstNamesArray, $namesArray[$i]);
	}
	if ($sortNames == true) {
		sort($firstNamesArray);
	}

	$lastValue = array_pop($firstNamesArray);
	$output = implode(", ", $firstNamesArray);
	$output .= ", and $lastValue";

	return $output;
}

// -------------------------------------------------------------------------

// List of famous peeps
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark, Joshua Sifuentes';

// TODO: Convert the string into an array
$physicistsArray = explode(", ", $physicistsString);

sort($physicistsArray);

// Humanize that list
$famousFakePhysicists = humanizedList($physicistsArray);


// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." .PHP_EOL;