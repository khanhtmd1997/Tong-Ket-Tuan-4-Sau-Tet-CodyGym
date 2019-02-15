<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php	
		function numberMin($array){			
			$index = 0;
			$min = $array[0];
			for($i=0;$i<count($array);$i++){
				if($min > $array[$i]){
					$min = $array[$i];
					$index = $i;					
				}
			}
			echo "Số nhỏ nhất trong mảng là ".$min." ở vị trí ".$index;	
		}
		$_array = array(5,4,3,7,8,1,9,2);
		numberMin($_array);
	?>
</body>
</html>