<?php
include ('ExecuteDB.php');
//khi nhan nut save phương thức POST
if(isset($_POST["txtId"]) && isset($_POST["txtTenTP"]) && isset($_POST["txtTenTG"]) && isset($_POST["txtTieuDe"]) && isset($_POST["txtNoiDung"]))
{
	$id = $_POST["txtId"];
	$tentp = $_POST["txtTenTP"];
	$tentg = $_POST["txtTenTG"];
	$tieude = $_POST["txtTieuDe"];
	$noidung = $_POST["txtNoiDung"];

	$sqlClause = "UPDATE tin set TenTP = '$tentp', TenTG = '$tentg', TieuDe = '$tieude', NoiDung = '$noidung' " .
										"  where id = $id";;
	$statement = ExecuteSql($sqlClause);
	if( $statement->rowCount() > 0 )
	{
		header("location: quantribangtin.php");
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
		$sqlClause = "select * from tin where id = $id";
		$statement = ExecuteSql($sqlClause);

		if( $statement->rowCount() > 0 )
		{
			
			//doc du lieu dong dau tien
			$row = $statement->fetch();
			$tentp = $row['TenTP'];
			$tentg = $row['TenTG'];
			$tieude = $row['TieuDe'];
			$noidung = $row['NoiDung'];
		}
		else
		{
			echo "người dùng không tồn tại";
		}
	}
}
?>
<div>
	<form action="suatin.php" method="post">
			ID:<input type="hidden" name="txtId" value="<?php echo $id; ?>"><br>
			Tên Tác Phẩm:<input type="text" name="txtTenTP" value="<?php echo $tentp; ?>"><br>
			Tên Tác Giả:<input type="text" name="txtTenTG" value="<?php echo $tentg; ?>"><br>
			Tiêu Đề:<input type="text" name="txtTieuDe" value="<?php echo $tieude; ?>"><br>
			Nội Dung:<input type="text" name="txtNoiDung" value="<?php echo $noidung; ?>"><br>
			 <button id='btnSave' style='color: red;'>Save</button>
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