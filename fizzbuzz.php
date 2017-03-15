<?php
// For loop that will echo numbers 1-100.

for ($i = 1; $i <= 100; $i++){
	// create if statement that will replace numbers divisible by 3 and 5 with FizzBuzz using modulus.
	if (($i % 5 == 0) && ($i % 3 == 0)){
		echo "FizzBuzz" . PHP_EOL;
	} else{
		echo $i . PHP_EOL;
	}
}

