<?php
	class Point2D{
		public $x;
		public $y;		
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
	class MoveablePoint extends Point2D{
		public $xSpeed;
		public $ySpeed;
		public function __construct(){
			parent::__construct();
			$this->xSpeed = 0;
			$this->ySpeed = 0;
		}
		public function getXSpeed(){
			return $this->xSpeed;
		}
		public function getYSpeed(){
			return $this->ySpeed;
		}
		public function setXSpeed($_xSpeed){
			$this->xSpeed = $_xSpeed;
		}
		public function setYSpeed($_ySpeed){
			$this->ySpeed = $_ySpeed;
		}
		public function toString(){
			echo "($this->x,$this->y,speed = ($this->x$this->xSpeed,$this->y$this->ySpeed))";
		}
		public function move(){
			$this->x +=  $this->xSpeed;
			$this->y +=  $this->ySpeed;
			return $this->x." ".$this->y;
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
	$moveablePoint = new MoveablePoint();
	$moveablePoint->setXSpeed(4);
	$moveablePoint->setXSpeed(7);
	$moveablePoint->toString();
	echo "<br>";
	echo $moveablePoint->getXSpeed()." ".$moveablePoint->getYSpeed();
	echo "<br>";
	echo $moveablePoint->move();
?>