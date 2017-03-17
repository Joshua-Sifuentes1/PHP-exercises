<?php  

// Create a for loop that creates a counter from 1 to 100 but only displaying even numbers
for ($i = 1; $i <= 100; $i++){
	
	if ($i % 2 == 1){
		continue;
	}

	echo $i . PHP_EOL;
}

// Creater a for loop from 1 to 100 but stopping after number 10