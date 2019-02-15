<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
	  	Từ: <input id = "from" type="text" name="from" placeholder="yyyyy/mm/dd"/>
	  	Đến: <input id = "to" type="text" name="to" placeholder="yyyy/mm/dd" />
	  	<input type = "submit" id = "submit" value = "Lọc"/>
	</form>
	<?php
		$list_array=array('1' => array("name"=>"Khánh","date"=>"1997/02/16","address"=>"Huế","profile"=>"../img/1.jpg"),
		'2' => array("name"=>"Khánh1","date"=>"1994/02/16","address"=>"Huế","profile"=>"../img/5.jpg"), 
		'3' => array("name"=>"Khánh2","date"=>"1993/02/16","address"=>"Huế","profile"=>"../img/2.jpg"), 
		'4' => array("name"=>"Khánh3","date"=>"1995/02/16","address"=>"Huế","profile"=>"../img/4.jpg"),  
		);
	?>
	<?php
		function searchByDate($customers, $fromdate, $todate) {
		    if(empty($fromdate) && empty($todate)){
		        return $customers;
		    }
		    $list = [];
		    foreach($customers as $customer){
		        if(!empty($fromdate) && (strtotime($customer['date']) < strtotime($fromdate)))
		            continue;
		        if(!empty($todate) && (strtotime($customer['date']) > strtotime($todate)))
		            continue;
		        $list[] = $customer;
		    }
		    return $list;
		}
	?>
	<?php
		$fromdate = NULL;
		$todate = NULL;
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		    $fromdate = $_POST["from"];
		    $todate = $_POST["to"];
		}
		$list = searchByDate($list_array, $fromdate, $todate);
	?>
	<table border="0">
	  	<caption><h2>Danh sách khách hàng</h2></caption>
	  	<tr>
	    	<th>STT</th>
	    	<th>Tên</th>
	    	<th>Ngày sinh</th>
	    	<th>Địa chỉ</th>
	    	<th>Ảnh</th>
		</tr>
		<?php
			if(count($list) === 0):
		?>
		<tr>
			<td colspan="5" class="message">Không tìm thấy khách hàng nào</td>
		</tr>
		<?php endif; ?>
		<?php
			foreach ($list as $index => $customer):
		?>
		<tr>
			<td>
				<?php echo $index + 1;?>
			</td>
			<td>
				<?php echo $customer['name'];?>
			</td>
			<td>
				<?php echo $customer['date'];?>
			</td>
			<td>
				<?php echo $customer['address'];?>
			</td>
			<td>
				<div class="profile">
					<img src='<?php echo $customer['profile']; ?>'>
				</div>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>

</body>
</html>