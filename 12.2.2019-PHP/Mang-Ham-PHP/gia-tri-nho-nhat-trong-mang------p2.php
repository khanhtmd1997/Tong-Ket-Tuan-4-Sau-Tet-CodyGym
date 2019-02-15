<!DOCTYPE html> 
<html> 
<head>     
	<title></title>     
	<meta charset="utf-8"> 
</head> 
<body>
	<h1>Vui lòng nhập 1 dãy số - mỗi số cách nhau bằng dấu phẩy</h1>     
	<div>         
		<form method="post">             
			<input type="text" name="number">             
			<input id="submit" type="submit" name="submit" value="Result">         
		</form>     
	</div>     
	<?php     
	if ($_SERVER["REQUEST_METHOD"] == "POST") {         
		$number = $_POST["number"]; 
		//tách dãy số thành mảng cách nhau bằng dấu phẩy         
		$arrayNumber = explode(",",$number);     
		$min = $arrayNumber[0];     
		$index = 0;     
		$lenght = count($arrayNumber);     
		for ($i = 0 ; $i < $lenght ; $i++){         
			if ($arrayNumber[$i] < $min) {             
				$min = $arrayNumber[$i];             
				$index = $i;         
			}     
		}     
		echo "mảng có số nhỏ nhất là: ".$min." ở vị trí thứ: ".$index;  
	}   
	?> 
</body> 
</html>