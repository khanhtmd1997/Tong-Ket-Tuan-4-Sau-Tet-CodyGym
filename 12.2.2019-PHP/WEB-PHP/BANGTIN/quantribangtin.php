<style>
table, th, td {
    border: 5px solid red;
}
</style>

<?php
	//tạo kết nối
include ('ExecuteDB.php');

//tạo lệnh
$sqlClause = "select * from tin";
//thuc thi
$statement = ExecuteSql($sqlClause);
//kiem tra so dong rowCount(kiểm tra kết quả)
//	echo "So dong bang tin la:" ." ". $statement->rowCount();
//TẠO BẢNG
	echo "<h1 style='color:red;height:50px;'>Quản Trị Bảng Tin</h1>";
	echo "<a href='themtin.php'>Thêm</a>";
	echo "<table style='display: table-cell; text-align: center;'>";
	echo 	"<tr>" . "<th>id</th><th>Tên Tác Phẩm</th><th>Tên Tác Giả</th><th>Tiêu Đề</th><th>Nội Dung</th><th>Action</th>".
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
			 "<td>$row[4]</td>".
			 "<td><a href='xoatin.php?id=$row[0]'>Xóa</a><br><a href='suatin.php?id=$row[0]'>Sửa</a></td>".
		 "</tr>";
}
?>
<br>
<br>
<table>
ma hoa:
<br>
<?php
$str = 'This is an encoded string';
echo base64_encode($str);
?>
<br>
giai ma:
<br>
<?php
$str = 'VGhpcyBpcyBhbiBlbmNvZGVkIHN0cmluZw==';
echo base64_decode($str);
?>
</table>