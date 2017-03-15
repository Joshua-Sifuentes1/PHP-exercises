<?php  
// input: A pair of numbers: min and max for a range
fwrite(STDOUT, 'Enter the minumum value: ');
$min = trim(fgets(STDIN));

fwrite(STDOUT, 'Enter the maximum value: ');
$max = trim(fgets(STDIN));

for($i = $min; $i <= $max; $i++) {
// process: modulus
	if ($i % 2 === 0){
		echo $i  . PHP_EOL;
	}
}

// output: only even numbers
?>