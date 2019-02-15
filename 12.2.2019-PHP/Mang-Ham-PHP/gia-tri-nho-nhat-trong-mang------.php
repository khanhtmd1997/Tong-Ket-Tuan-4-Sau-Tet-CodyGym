<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<div>
		<form method="post">
			<input type="text" name="number"> 
			<input id="submit" type="submit" name="submit" value="Nhap">
		</form>
	</div>
	<?php 

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$number = $_POST["number"];
		$mang = array(4,3,2,5,1,5,6);    	 
		//echo "Giá trị nhỏ nhất: ".$gia_tri_nho_nhat."<br>";
		array_push($mang,$number);	
		$min = min($mang); 
		print_r($min); 

	}
	?>
</body>
</html>
