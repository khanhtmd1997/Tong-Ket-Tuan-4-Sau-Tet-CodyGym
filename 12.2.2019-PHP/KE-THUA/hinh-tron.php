<?php
	class Circle{
		public $bankinh;
		private $color;
		public function __construct($bankinh,$color){
			$this->bankinh = $bankinh;
			$this->color = $color;
		}
		public function getR(){
			return $this->bankinh;
		}
		public function getColor(){
			return $this->color;
		}
		public function setR($_bankinh){
			$this->bankinh = $_bankinh;
		}
		public function setColor($_color){
			$this->color = $_color;
		}
		public function dienTich(){
			return $this->bankinh * $this->bankinh * pi();
		}
		public function toString(){
			echo "Hình Tròn";
		}
	}
	class Cylinder  extends Circle
	{	
		public $chieucao;	
		public function __construct($bankinh,$color,$chieucao){
			parent::__construct($bankinh,$color);
			$this->chieucao = $chieucao;
		}
		public function theTich(){
			return pi()*$this->bankinh*$this->chieucao;
		}
		public function toString(){
			echo "Kế thừa hình tròn";
		}
	}
	$circle = new Circle(4,"blue");
	echo $circle->getR()." ".$circle->getColor();
	$circle->toString();
	echo "<br>";
	$circle->setR(10);
	echo $circle->getR();
	$circle->setColor("red");
	echo $circle->getColor();
	echo "<br>";
	echo "Diện tích ".$circle->dienTich();
	$cylinder = new Cylinder(5,"red",10);
	echo "<br>";
	echo "Thể tích ".$cylinder->theTich();
	echo "<br>";
	echo $cylinder->toString();
?>