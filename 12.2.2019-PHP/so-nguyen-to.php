<!DOCTYPE html>
<html>
<head>
	<title>Số nguyên tố từ 1-100</title>
</head>
<body>
	<?php
		function songuyento($n){
			
			if($n < 2){
				return false;
			}
			$mathsqrt = sqrt($n);
			for($i = 2; $i < $mathsqrt; $i++){
				if($n % $i == 0) {
					return false;
				}
			}
			return true;
			
		}

		echo "Các số nguyên tố từ 1-100:<br>";
		for ($i=0; $i < 100 ; $i++) { 
			# code...			
			if(songuyento($i)){
				echo $i."<br>";
			}
		}
		echo "<h1>Hiển thị 20 số nguyên tố đầu tiên</h1>";
		$count = 0;
		for ($i=0; $i < 100 ; $i++) { 
			# code...
			
			if(songuyento($i)){
				$count += 1;
				if($count<=20)
				echo $i."<br>";
			}
		}
	?>
	
</body>
</html>