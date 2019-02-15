<style>
table, th, td {
    border: 5px solid pink;
}
</style>

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
$statement = $cnn->prepare('select * from nguoidung');
//thuc thi
$statement->execute();
//kiem tra so dong rowCount(kiểm tra kết quả)
//	echo "So dong bang tin la:" ." ". $statement->rowCount();
//TẠO BẢNG
	echo "<h1 style='color:red;height:50px;'>Quản Trị Người Dùng</h1>";
	echo "<a href='them.php'>Thêm</a>";
	echo "<table style='display: table-cell; text-align: center;'>";
	echo 	"<tr>" . "<th>Id</th><th>Tên đăng nhập</th><th>Mật Khẩu</th><th>ROLES</th><th>Action1</th>".
	 		"</tr>";
//in ra danh sach
//while ($row = $statement->fetch())
//{
	//echo "Id:" ." ". $row[0] . "<br>";
	//echo "Tieu De:" ." " . $row[1];
//}
while ($row = $statement->fetch()) //đọc dữ liệu trong bảng
{
	echo "<tr>".
			 "<td>$row[0]</td>".
			 "<td>$row[1]</td>".
			 "<td>$row[2]</td>".
			 "<td>$row[3]</td>".
			 "<td><a href='deletebangtin.php?id=$row[0]'>Xóa</a><br><a href='suabangtin.php?id=$row[0]'>Sửa</a></td>".
		 "</tr>";
}
?>

