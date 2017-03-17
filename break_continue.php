<?php  

// Create a for loop that creates a counter from 1 to 100 but only displaying even numbers
for ($i = 1; $i <= 100; $i++){

	if ($i % 2 == 1){
		continue;
	}

	echo $i . PHP_EOL;
}

echo PHP_EOL;

// Create a for loop from 1 to 100 but stopping after number 10
for ($i = 1; $i <= 100; $i++){

	if ($i > 10){
		break;
	}

	echo $i . PHP_EOL;
}