<?php  
// prompt user for starting number

// added do-while loop if user does not enter a numeric value;

do{	
	fwrite(STDOUT, 'Enter a starting value: ');
	$start = trim(fgets(STDIN));
	if (!is_numeric($start)){
		fwrite(STDOUT, 'Invalid input, please enter an integer value' . PHP_EOL);
	}
} while(!is_numeric($start));

// prompt the user for ending number

// loop for invalid input

do{	
	fwrite(STDOUT, 'Enter a ending value: ');
	$end = trim(fgets(STDIN));
	if (!is_numeric($end)){
		fwrite(STDOUT, 'Invalid input, please enter an integer value' . PHP_EOL);
	}
} while(!is_numeric($end));

// Allow user to select the increment the numbers are displayed by.

fwrite(STDOUT, 'Select increment: ');
$increment = trim(fgets(STDIN));

// if start value is larger than end value

if ($start > $end) {
	$newStart = $end;
	$newEnd = $start;
	$start = $newStart;
	$end = $newEnd;

}

// defaulting increment to 1 if value is not numeric.

if (empty($increment) || !is_numeric($increment)){
	$increment = 1;
} 

// Display all the numbers from the starting number and the ending number in a For loop

for ($i = $start; $i <= $end; $i += $increment) {
	echo $i . PHP_EOL;
}

?>