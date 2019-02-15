<!-- <?php
	$string = "Nguyễn Văn Khánh";
	$result = substr_count($string, "n");
	echo $result;
?> -->

<?php
	$string = "Nguyễn Văn Khánh";
	$bien = "n";
	$count = 0;
	for ($i=0; $i < strlen($string) ; $i++) { 
		if($bien == $string[$i]){
			$count ++;
		}		
	}
	echo "biến n xuất hiện ".$count." lần";
?>