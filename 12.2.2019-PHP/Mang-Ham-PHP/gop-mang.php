<?php
	$mang1 = array("khanh","loc");
	$mang2 = array("tuan","hoang");
	$mang3 = array();
	//duyệt mảng 1
	for($i=0;$i<count($mang1);$i++){
		//push từng giá trị của mảng 1 vào mảng 3
		array_push($mang3, $mang1[$i]);
	}
	//duyệt mảng 2
	for($j=0;$j<count($mang2);$j++){
		//push từng giá trị của mảng 1 vào mảng 3
		array_push($mang3, $mang2[$j]);
	}
	//in ra mảng 3
	print_r($mang3); 

?>