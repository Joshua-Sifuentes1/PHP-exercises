<?php  

$filename = "fruits.txt";
$fruits = ['apple', 'kiwi', 'grape', 'mango'];

function write($filename, $array){

	$handle = fopen($filename, 'a');

	foreach ($array as $item) {
		fwrite($handle, $item . PHP_EOL);
	}

	fclose($handle);
}

write($filename, $fruits);







?>