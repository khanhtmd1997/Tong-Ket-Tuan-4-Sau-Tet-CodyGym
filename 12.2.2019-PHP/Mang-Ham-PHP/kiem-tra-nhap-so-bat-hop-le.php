<!DOCTYPE html>
<html>
<head>
	<title>Máy tính cơ bản</title>
	<style> 
        input[type=text],input[type=number],.select {
            width: 300px;
            font-size: 16px;
            border: 5px solid #ccc; 
            border-radius: 10px;
            padding: 12px 10px 12px 10px;
        }
        #submit {
            border-radius: 10px;
            padding: 10px 32px;
            font-size: 20px;
        }
        </style>
</head>
<body>
	<form method="post">
		<input type="text" name="numberOne" placeholder="Nhập số đầu tiên">
		<input type="text" name="calculation" placeholder="phép tính">
		<input type="text" name="numberTwo" placeholder="Nhập số thứ hai">
		<input type = "submit" id = "submit" value = "Tính"/>
	</form>
	<?php
		function calc($x,$y){
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				$numberOne = $_POST['numberOne'];
				$calculation = $_POST['calculation'];
				$numberTwo = $_POST['numberTwo'];
		}
	?>
</body>
</html>