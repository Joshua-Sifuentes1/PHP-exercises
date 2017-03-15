<?php  
// prompt user for starting number

fwrite(STDOUT, 'Enter a starting value: ');
$start = trim(fgets(STDIN));

// prompt the user for ending number

fwrite(STDOUT, 'Enter a starting value: ');
$end = trim(fgets(STDIN));

// Allow user to select the increment the numbers are displayed by.
fwrite(STDOUT, 'Select increment: ');
$increment = trim(fgets(STDIN));

// Display all the numbers from the starting number and the ending number in a For loop

for ($i = $start; $i <= $end; $i += $increment) {
	echo $i . PHP_EOL;
}



?>