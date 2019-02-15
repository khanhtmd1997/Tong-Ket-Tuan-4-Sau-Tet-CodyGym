<?php
const SLOW = 1;
const MEDIUM = 2;
const FAST = 3;
	class Fan{
		
		private $speed;
		public 	$on;
		private $radius;
		private $color;
		//khai báo mặt định
		public function Fan(){
			$this->on = false;
			$this->speed = SLOW;
			$this->radius = 5;
			$this->color = "blue";
		}
		public function setFan($_speed,$_on,$_radius,$_color){
			$this->speed = $_speed;
			$this->on = $_on;
			$this->radius = $_radius;
			$this->color = $_color;
		}
		public function getSpeedFan(){
			return $this->speed;
		}
		public function getOnFan(){

			return $this->on;
		}
		public function getRadiusFan(){
			return $this->radius;
		}
		public function getColorFan(){
			return $this->color;
		}
		public function khoiTao(){
			return $this->speed." ".$this->radius." ".$this->color;
		}
	}
	$fan = new Fan();
	if(!$fan->getOnFan()){
		echo "Quạt đang ở chế độ tắt<br>";
	}else echo $fan->khoiTao();
	$fan->setFan(MEDIUM,true,6,"red");
	if(!$fan->getOnFan()){
		echo "Quạt đang ở chế độ tắt";
	}else echo $fan->khoiTao();
	

?>