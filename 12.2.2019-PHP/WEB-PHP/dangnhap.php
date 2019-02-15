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
		header("Location: quantribangtin.php");
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
include ('ExecuteDB.php');
if(isset($_POST["txtUser"]) && isset($_POST["txtPassword"]))
{
	$username = $_POST["txtUser"];
	$password = $_POST["txtPassword"];
	$sqlClause ="select * from tin where username='$username' and password='$password'";
	//thuc thi
	$statement = ExecuteSql($sqlClause);
	if( $statement->rowCount()>0)
	{
		//luu user ở session
		$_SESSION["username"]= $username;
		//chuyển tới trang quantribangtin.php
		header("Location:quantribangtin.php");
	}
	else
	{
		echo "user và password không đúng vui lòng nhập lại";
	}
}
	
?>
<div>
	<form action="dangnhap.php" method="post">
		User:	 <input type="text" name="txtUser"><br>
		PassWord:<input type="password" name="txtPassword"><br>
				 <button type="submit" style="color: blue;">Login</button>
	</form>
</div>