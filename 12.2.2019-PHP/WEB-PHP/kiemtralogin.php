<?php
session_start();
?>
<style>
table, th, td {
    border: 5px solid pink;
}
</style>
<?php
	$user = "";
	$password = "";
	if (isset($_POST["txtUser"]) && isset($_POST["txtPassword"]))
	{
		$user = $_POST["txtUser"];
		$password =$_POST["txtPassword"];
	}
	if ($user == "1" && $password == "1")
	{
		header("Location: nguoidung.php");
	}

	if(isset($_POST["txtUser"]) && isset($_POST["txtPassword"]))
	{
		setcookie("username", $_POST["txtUser"], time() + 3600, "/");
		setcookie("password", $_POST["txtPassword"], time() + 3600, "/");
	}

	if(isset($_COOKIE["txtUser"]) && isset($_COOKIE["txtPassword"]))
	{
		$username = $_COOKIE["txtUser"];	
		$password = $_COOKIE["txtPassword"];	
	}

?>

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
	if( $statement->rowCount()>0)
	{
		//luu user ở session
		$_SESSION["username"]= $username;
		//chuyển tới trang index
		header("Location:index.php");
	}
	else
	{
		echo "user và password không đúng vui lòng nhập lại";
	}
}
	
?>
<div>
	<form action="kiemtralogin.php" method="post">
		User:	 <input type="text" name="txtUser"><br>
		PassWord:<input type="password" name="txtPassword"><br>
				 <input type="submit" name="Login">
	</form>
</div>