<?php

function add($a, $b)
{
	return $a + $b;
}

function subtract($a, $b)
{
	return $a - $b;
}

function multiply($a, $b)
{
	return $a * $b;
}

function divide($a, $b)
{
	return $a / $b;
}

function modulus($a, $b)
{
	return $a % $b;
}

echo add(4, 2) . PHP_EOL;
echo subtract(4, 2) . PHP_EOL;
echo multiply(4, 2) . PHP_EOL;
echo divide(4, 2) . PHP_EOL;
echo modulus(3, 2) . PHP_EOL;