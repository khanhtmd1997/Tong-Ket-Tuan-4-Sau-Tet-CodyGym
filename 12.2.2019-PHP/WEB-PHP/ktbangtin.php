<?php
	//tạo kết nối
$cnn = getConnection();
function getConnection()
{
	$oConnection = new PDO(
		'mysql:host=localhost;dbname=qltintuc', 
		'root', 
		'', 
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
		
	return $oConnection;

}

//tạo lệnh
$statement = $cnn->prepare('select * from bangtin');
//thuc thi
$statement->execute();
//kiem tra so dong rowCount(kiểm tra kết quả)
echo "So dong bang tin la:" ." ". $statement->rowCount();
?>