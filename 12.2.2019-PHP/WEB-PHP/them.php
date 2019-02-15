<?php
//tạo biến Id truyền theo phương thức GET
//$Id = $_GET["id"]; 
//echo $Id;
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
if(isset($_POST["txtUser"]) && isset($_POST["txtPassword"]) && isset($_POST["txtRoles"]))
{
	$username = $_POST["txtUser"];
	$password = $_POST["txtPassword"];
	$roles = $_POST["txtRoles"];

	//tạo lệnh

	$sqlClause = "INSERT INTO nguoidung(username, password, roles) values ('$username', '$password', $roles)";
	$statement = $cnn->prepare($sqlClause);
	//thuc thi
	$statement->execute();
	//kiem tra so dong rowCount(kiểm tra kết quả)
	//	echo "So dong bang tin la:" ." ". $statement->rowCount();
	//xu li kq

	if( $statement->rowCount() > 0)
	{
		header("location: nguoidung.php");
	}
	else
	{
		echo " Lỗi xảy ra khi thêm";
		
	}
}
?>
<div>
	<form action="them.php" method="post">
			<input type="text" name="txtUser" placeholder="Username.."><br>
			<input type="password" name="txtPassword" placeholder="Password.."><br>
			<input type="text" name="txtRoles" placeholder="roles.."><br>
			<input type="submit" name="Save">
	</form>
</div>
