<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		class pTB2{
			private $a;
			private $b;
			private $c;
			public $delta;
			public $x1;
			public $x2;
			public function setGiaTri($_a,$_b,$_c){
				$this->a = $_a;
				$this->b = $_b;
				$this->c = $_c;
			}
			public function hienThi(){
				return $this->a.$this->b.$this->c; 
			}
			public function tinhDelta(){
				$delta = (($this->b*$this->b) - (4*$this->a*$this->c));
				return $delta;
			}
			public function nghiem1(){
				$x1 = ((-$this->b + sqrt((($this->b*$this->b) - (4*$this->a*$this->c))))/(2*$this->a));
				return $x1;
			}
			public function nghiem2(){
				$x2 = ((-$this->b - sqrt((($this->b*$this->b) - (4*$this->a*$this->c))))/(2*$this->a));
				return $x2;
			}
		}
		$PTB2 = new pTB2();
		$PTB2->setGiaTri(2,3,1);
		echo "Delta = ".$PTB2->tinhDelta();
		echo "<br>";
		if($PTB2->tinhDelta() > 0 ){
			echo "Nghiệm 1 bằng ".$PTB2->nghiem1()."<br>"."Nghiệm 2 bằng ".$PTB2->nghiem2();
		}else if($PTB2->tinhDelta() == 0){
			echo "Nghiệm kép bằng ".$PTB2->nghiem1();
		}else echo "Vô nghiệm";
	?>
</body>
</html>