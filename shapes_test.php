<?php  

require_once 'Rectangle.php';
require_once 'Square.php';

$rectangle = new Rectangle(9, 9);

echo $rectangle->area() . PHP_EOL;

$rectangle2 = new Rectangle(10, 10);

echo $rectangle2->area() . PHP_EOL;

$rectangle3 = new Rectangle(12, 12);

echo $rectangle3->area() . PHP_EOL;

$square = new Square (10, 10);

echo $square->area() . PHP_EOL;
echo $square->perimeter() . PHP_EOL;

?>