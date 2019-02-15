<?php
	class Point2D{
		private $x;
		private $y;		
		public function __construct(){
			$this->x = 0;
			$this->y = 0;
		}
		public function getX(){
			return $this->x;
		}
		public function getY(){
			return $this->y;
		}
		public function setX($_x){
			$this->x = $_x;
		}
		public function setY($_y){
			$this->y = $_y;
		}
		public function setXY($__x,$__y){
			$this->x = $__x;
			$this->y = $__y;
		}
		public function getXY(){
			return $this->x." ".$this->y;
		}
		public function toString(){
			echo "X và Y";
		}
	}
	class Point3D extends Point2D{
		public $z;
		public function __construct(){
			parent::__construct();
			$this->z = 0;
		}
		public function setZ($_z){
			$this->z = $_z;
		}
		public function getZ(){
			return $this->z;
		}
		public function getXYZ(){
			return parent::getX()." ".parent::getY(). " ".$this->z;
		}
		public function toString(){
			echo "X Y Z";
		}
	}
	$point2d = new Point2D();
	$point2d->toString();
	echo "<br>";
	echo $point2d->getX()." ".$point2d->getY();
	echo "<br>";
	$point2d->setX(5);
	$point2d->setY(7);
	echo $point2d->getX()." ".$point2d->getY();
	echo "<br>";
	$point2d->setXY(6,8);
	echo $point2d->getXY();
	echo "<br>";
	
	$point3d = new Point3D();
	$point3d->toString();
	echo "<br>";
	echo $point3d->getX()." ".$point3d->getY()." ".$point3d->getZ();
	echo "<br>";
	$point3d->setX(5);
	$point3d->setY(7);
	$point3d->setZ(17);
	echo $point3d->getXYZ();
	echo "<br>";
	
?>