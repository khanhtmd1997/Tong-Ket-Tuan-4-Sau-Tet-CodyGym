<?php
	class Shape{
		public $name;
		public function __construct($name){
			$this->name = $name;
		}
		public function show(){
			return "I am a shape. My name is $this->name";
		}
	}
	class Rectangle extends Shape{
		public $width;
		public $height;
		public function __construct($name, $width, $height){
			parent::__construct($name);
			$this->width = $width;
			$this->height = $height;
		}
		public function calculateArea(){
			return $this->width * $this->height;
		}
		public function calculatePerimeter(){
			return ($this->height + $this->width) * 2;
		}
	}
	class Square extends Rectangle{
		public function __construct($name,$width){
			parent::__construct($name,$width);
		}
	}
	class Circle extends Shape{
		public $radius;
		public function __construct($name,$radius){
			parent::__construct($name);
			$this->radius = $radius;
		}
		public function calculateArea(){
			return pi() * pow($this->radius, 2);
		}
		public function calculatePerimeter(){
		 	return pi() * $this->radius * 2;
		}
	}
	class Cylinder  extends Circle{	
		public $height;
		public function __construct($name,$darius,$height){
			parent::__construct($name,$darius);
			$this->height = $height;
		}
		public function calculateArea(){
 			return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
 		}
		public function calculateVolume(){
 			return parent::calculateArea() * $this->height;
 		}
	}
	$circle = new Circle("01",3);
	echo "circle area = ".$circle->calculateArea()."<br>";
	echo "circle Perimeter = ".$circle->calculatePerimeter()."<br>";
	$cylinder = new Cylinder("0001",3,4);
	echo "cylinder area = ".$cylinder->calculateArea()."<br>";
	echo "cylinder Perimeter = ".$cylinder->calculateVolume()."<br>";
	$rectangle = new Rectangle('Rectangle 01', 3 , 4);
	echo "rectangle area = ".$rectangle->calculateArea()."<br>";
	echo "rectangle Perimeter = ".$rectangle->calculatePerimeter()."<br>";
	// $square = new Shape("square 01",4);
	// echo "square area = ".$square->calculateArea()."<br>";
	// echo "square Perimeter = ".$square->calculatePerimeter()."<br>";

?>