<?php

	include ('ExecuteDB.php');
	
	if ($_REQUEST['delete']) {
		
		$pid = $_REQUEST['delete'];
		$sqlClause = "DELETE FROM tin WHERE id=:pid";
		$statement = ExecuteSql( $sqlClause );
		$statement->execute(array(':pid'=>$pid));
		
		if ($stmt) {
			echo "Product Deleted Successfully ...";
		}
		
	}