<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>         
		<form method="post">             
			<input type="number" name="row" placeholder="nhập số dòng">  
			<input type="number" name="col" placeholder="nhập số cột">            
			<input id="submit" type="submit" name="submit" value="Result">         
		</form>     
	</div>  
	<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {   
				$row = $_POST["row"]; 
				$col = $_POST["col"]; 
				echo $row;
				echo $col;
				$array = array();
				echo "<table>";
				for($i=0;$i<$row;$i++){
					array_push()
					for($j=0;$j<$col;$j++){
						array_push($array,[$i][$j]);
						echo "<td>".print_r($array)."</td>" ;
					}
					echo "</tr>";
				}
				echo "</table>";
			}
		?>
</body>
</html>