<?php
	class hinhChuNhat{
		public $chieudai;
		public $chieurong;
	public function __construct($chieudai,$chieurong){
		$this->chieudai = $chieudai;
		$this->chieurong = $chieurong;
	}
	public function dienTich(){
		return $this->chieudai * $this->chieurong;
	}
	public function chuVi(){
		return (($this->chieudai + $this->chieurong)*2);
	}
	public function hienThi(){
		return "chiều dài = ".$this->chieudai. " chiều rộng = ".$this->chieurong;
	}
}
	$chieudai = 10;
	$chieurong = 20;
	$chuNhat = new hinhChuNhat($chieudai,$chieurong);
	echo "chu vi bằng " .$chuNhat->chuVi()."<br>";
	echo "diện tích bằng ". $chuNhat->dienTich()."<br>";
	echo $chuNhat->hienThi();
?>