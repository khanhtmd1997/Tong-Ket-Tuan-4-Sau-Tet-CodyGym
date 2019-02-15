<?php
include ('ExecuteDB.php');

if(isset($_POST["txtTenTP"]) && isset($_POST["txtTenTG"]) && isset($_POST["txtTieuDe"]) && isset($_POST["txtNoiDung"]))
{
	$tentp = $_POST["txtTenTP"];
	$tentg = $_POST["txtTenTG"];
	$tieude = $_POST["txtTieuDe"];
	$noidung = $_POST["txtNoiDung"];

	//tạo lệnh

	$sqlClause = "INSERT INTO tin(TenTP, TenTG, TieuDe, noidung) values ('$tentp', '$tentg', '$tieude','$noidung')";
	$statement = ExecuteSql($sqlClause);
	//kiem tra so dong rowCount(kiểm tra kết quả)
	//	echo "So dong bang tin la:" ." ". $statement->rowCount();
	//xu li kq

	if( $statement->rowCount() > 0)
	{
		header("location: quantribangtin.php");
	}
	else
	{
		echo " Lỗi xảy ra khi thêm";
		
	}
}
?>
<div>
	<form action="themtin.php" method="post">
			<input type="text" name="txtTenTP" placeholder="Tên Tác Phẩm.."><br>
			<input type="text" name="txtTenTG" placeholder="Tên Tác Giả.."><br>
			<input type="text" name="txtTieuDe" placeholder="Tiêu Đề.."><br>
			<input type="text" name="txtNoiDung" placeholder="Nội Dung.."><br>
			<button type="submit"> Save</button>
	</form>
</div>
