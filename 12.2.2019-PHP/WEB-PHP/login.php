<style>
table, th, td {
    border: 5px solid pink;
}
</style>
<?php
	
function getConnection()
{
	$oConnection = new PDO(
		'mysql:host=localhost;dbname=qltintuc', 
		'root', 
		'', 
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
		
	return $oConnection;
//kiem tra dữ liệu đã đc submit

}
if(isset($_POST["txtUser"]) && isset($_POST["txtPassword"]))
{
	$username = $_POST["txtUser"];
	$password = $_POST["txtPassword"];
	//tạo kết nối
	$cnn = getConnection();
	//tạo lệnh
	$statement = $cnn->prepare("select * from nguoidung where username='$username' and password='$password'");
	//thuc thi
	$statement->execute();
	//echo "So dong bang tin la:" ." ". $statement->rowCount();
}
	
?>
<div>
	<form action="nguoidung.php" method="post">
		User:	 <input type="text" name="txtUser"><br>
		PassWord:<input type="password" name="txtPassword"><br>
				 <input type="submit" name="Login">
	</form>
</div>