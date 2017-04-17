<?php  

class Rectangle 
{
	public $height;
	public $width;

	public function __construct($height, $width)
	{
		$this->height = $height;
		$this->width = $width;
	}

	public function area()
	{
		$area = $this->height * $this->width;
		return $area;
	}

	public function perimeter() 
	{
		return 2 * $this->height + 2 * $this->width;
	}
}









?>