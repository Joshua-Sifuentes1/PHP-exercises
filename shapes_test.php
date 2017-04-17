<?php  

require_once 'Rectangle.php';
require_once 'Square.php';

$rectangle = new Rectangle(9, 9);

echo $rectangle->area() . PHP_EOL;
echo $rectangle->perimeter() . PHP_EOL;

$square = new Square (10);

echo $square->area() . PHP_EOL;
echo $square->perimeter() . PHP_EOL;

?>