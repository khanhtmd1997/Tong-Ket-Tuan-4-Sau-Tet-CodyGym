
<?php

	$Id = $_GET["id"]; 
	include ('ExecuteDB.php');

	//tạo lệnh
	$sqlClause ="delete from tin where  id = $Id ";
	//thuc thi
	$statement = ExecuteSql($sqlClause);
	//kiem tra so dong rowCount(kiểm tra kết quả)
	if( $statement->rowCount() )
	//xu li kq
	{
		header("location: quantribangtin.php");
	}
	else
	{
		echo " Lỗi xảy ra khi xóa bấm BACK để trở về trang chủ    <button id='btnBack'>Back</button>";
	}
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
	    	$("button").click(function(){
	        $("#btnBack").load("quantribangtin.php");
	   		 });
		});
	</script>

