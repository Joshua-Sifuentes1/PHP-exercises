<?php  

$firstName = "Joshua";

function sayHello($name){
	$firstName = "Josh";
	return "Hello there, $name!" . PHP_EOL;

}

echo sayHello($firstName) . PHP_EOL;

echo $firstName;