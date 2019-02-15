<?php
session_start();
?>
<table>
	<tr>
		<td><h1 >WEB HỌC TẬP</h1></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td><h3>Wellcom To LayDy GAGA <?php if(isset($_SESSION["username"])) {echo $_SESSION["username"];} else {header("location: nguoidung.php");}?></h3></td>
	</tr>
	<tr>
		<td>
			<h3>Danh mục chức năng</h3>
			<ul>
				<li><a href="#">Quản trị nhóm bài viết</a></li>
				<li><a href="nguoidung.php">Quản trị người dùng</a></li>
				<li><a href="#">Quản trị bài viết</a></li>
			</ul>
		</td>
		<td><h1>Chức năng.....</h1></td>
	</tr>
	<tr>
		<td>
			<h1>Footer</h1>
		</td>
	</tr>
</table>