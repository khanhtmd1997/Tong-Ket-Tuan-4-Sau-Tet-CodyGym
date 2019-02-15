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
	class Triangle extends Shape{
		public $side1;
		public $side2;
		public $side3;
		public $color;
		public function __construct($name){
			parent::__construct($name);
			$this->side1 = 1.0;
			$this->side2 = 1.0;
			$this->side3 = 1.0;
			$this->color = "blue";
		}
		public function getArea(){
			return sqrt(($this->side1+$this->side2+$this->side3)*($this->side1+$this->side2-$this->side3)*
				($this->side2+$this->side3-$this->side1)*($this->side3+$this->side1-$this->side3))/4;
		}
		public function getPerimeter(){
			return $this->side1+$this->side2+$this->side3;
		}
		public function toString(){
			echo $this->name."<br>"."Cạnh 1 = ".$this->side1."<br>"."Cạnh 2 = ".$this->side2."<br>"."Cạnh 3 = ".$this->side3."<br>";
		}
	}
	$triangle = new Triangle("Khánh");
	echo $triangle->toString();
	echo "<br>";
	echo "diện tích = ".$triangle->getArea();
	echo "<br>";
	echo "chu vi bằng = ".$triangle->getPerimeter();
	
	
?>