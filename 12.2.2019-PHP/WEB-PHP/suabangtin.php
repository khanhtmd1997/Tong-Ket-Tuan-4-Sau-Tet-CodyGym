<?php
include('ExecuteDB.php');
//khi nhan nut save phương thức POST
if(isset($_POST["txtId"]) && isset($_POST["txtUser"]) && isset($_POST["txtPassword"]) && isset($_POST["txtRoles"]))
{
	$id = $_POST["txtId"];
	$username = $_POST["txtUser"];
	$password = $_POST["txtPassword"];
	$roles = $_POST["txtRoles"];

	$sqlClause = "UPDATE nguoidung set username = '$username', password = '$password', " .
										" roles = $roles where id = $id";;
	$result =  ExecuteSql($sqlClause);
	if( $result->rowCount() > 0 )
	{
		header("location: nguoidung.php");
	}
	else
	{
		echo " Lỗi xảy ra khi Save";
		
	}
}
else
{
	//khi nhan link sua tu trang nguoidung.php
	//đây là phương thức GET
	if(isset($_GET["id"]))
	{
		$id = $_GET["id"];
		$sqlClause = "select * from nguoidung where id = $id";
		$result =  ExecuteSql($sqlClause);

		if( $result->rowCount() > 0 )
		{
			
			//doc du lieu dong dau tien
			$row = $result->fetch();
			$username = $row['username'];
			$password = $row['password'];
			$roles = $row['roles'];
		}
		else
		{
			echo "người dùng không tồn tại";
		}
	}
}
?>
<div>
	<form action="suabangtin.php" method="post">
			ID:<input type="hidden" name="txtId" value="<?php echo $id; ?>"><br>
			User:<input type="text" name="txtUser" value="<?php echo $username; ?>"><br>
			Password:<input type="text" name="txtPassword" value="<?php echo $password; ?>"><br>
			Roles:<input type="text" name="txtRoles" value="<?php echo $roles; ?>"><br>
			 <button id='btnSave'>Save</button>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
    	$("button").click(function(){
        $("#btnSave").load("nguoidung.php");
   		 });
	});
</script>