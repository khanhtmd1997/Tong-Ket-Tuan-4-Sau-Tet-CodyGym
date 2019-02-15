<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
   <div>         
      <form method="post">             
         <input type="number" name="enter" placeholder="nhập">             
         <input id="submit" type="submit" name="submit" value="Result">         
      </form>     
   </div>  
<?php
	function random(){
		if ($_SERVER["REQUEST_METHOD"] == "POST") {  
   			$enter = $_POST['enter'];
			$numbers = range(1, 100);
			$count =0;
			$index = 0;
			shuffle($numbers);
			foreach ($numbers as $number) {
				$count = $count +1;
				//$index++;
			    echo $number." ";
			}
			if($enter < 1 || $enter >= 100){
				throw new Exception("Vui lòng nhập trong khoảng từ 1 đến 100");
			}
			for($i=0;$i<count($numbers);$i++){
				// if($enter == $numbers){
				// 	echo "<h1>".$enter. " ở vị trí ". $i."</h1>";
				// }
				//echo "<br>".$i." ";
				if($enter == $numbers[$i]){
					echo "<h1>đã tìm thấy số ".$enter. " ở vị trí ". $i."</h1>";
				}
			}
				
			echo "<br><h1>".$count." số hiện tại</h1>";
			//echo "<br><h1>".$enter." Vị trí hiện tại là ".$index."</h1>";
		}
	}
	try {
   random();
   echo "<br>";
 }
 
 /* catch exception */
 catch(Exception $e) {
   echo '<br>Message: ' .$e->getMessage();
 }
?>
</body>
</html>