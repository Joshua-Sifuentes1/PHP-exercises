<?php

function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		return $a + $b . PHP_EOL;
	} else {
		echo errorMessage($a, $b);
	}
}

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		return $a - $b . PHP_EOL;
	} else {
		echo errorMessage($a, $b);
	}
}

function multiply($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		return $a * $b . PHP_EOL;
	} else {
		echo errorMessage($a, $b);
	}
}

function divide($a, $b)
{
	if ($b == 0 ) {
		return "ERROR: Cannot divide by ZERO. Values input: $a and $b" . PHP_EOL;
	} elseif (is_numeric($a) && is_numeric($b)) {
		return $a / $b . PHP_EOL;
	} else {
		echo errorMessage($a, $b);
	}
}

function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		return $a % $b . PHP_EOL;
	} else {
		echo errorMessage($a, $b);
	}
}

function errorMessage($a, $b){
	return "ERROR: Both arguments must be numeric. Values input: $a and $b" . PHP_EOL;
}

echo add(4, 2);
echo subtract("h", 2);
echo multiply(4, 2);
echo divide(4, 0);
echo modulus(3, "b");