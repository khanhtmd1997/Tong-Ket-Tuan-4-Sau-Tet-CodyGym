<?php
	$array = array(
		array("khanh",22),
		array("khanh123",22),
		array("khanh12",22),
		array("khanh324",22)
	);
	echo"<table>";
	echo "<tr><th>Tên</th><th>Tuổi</th></tr>";
	for($row = 0; $row < 4;$row++){
		echo "<tr>";
		for ($col=0; $col < 2 ; $col++) { 			
			echo "<td>".$array[$row][$col]."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>