<?php
	class Person{
		private $name;
		private $ho;
		//public age 32 có thể truy xuất ra đc còn private phải khai báo
		public $age;
		public function get_name(){
			return $this->name;
		}
		public  function set_name($new_name){
			$this->name = $new_name;
		}
		public function get_ho(){
			return $this->ho;
		}
		public function set_ho($new_ho){
			$this->ho = $new_ho;
		}
		public function get_ho_va_ten(){
			return $this->ho." ".$this->name;
		}
		public function check(){
			if($this->age >=18){
				return true;
			}else 
				return false;
		}
	}
	$person = new Person();
	$person->set_name("Khánh");
	$person->set_ho("Nguyễn Văn");
	echo $person->get_ho_va_ten();
	$person->age = 32;
	// echo $person->check();
	if($person->check()){
		echo "Đủ tuổi";
	}
	else echo "chưa đủ tuổi";
	echo"<br>";
	$list = array();
	for ($i=0; $i < 3; $i++) { 
		$list[$i] = new Person();
		$list[$i]->set_ho("Trần Văn");
		$list[$i]->set_name("Trần");
		$list[$i]->age = 21;
	}
	
	echo "Tổng ".count($list);
	$list[1]->age = 15;
	for ($i=0; $i < 3; $i++) {
		echo "<br>";
		echo $list[$i]->get_ho_va_ten().$list[$i]->age;
		if($person->check()){
			echo "Đủ tuổi";
		}
		else echo "chưa đủ tuổi";
	}
	
?>