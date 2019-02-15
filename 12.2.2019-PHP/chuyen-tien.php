<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ứng dụng chuyển đổi tiền tệ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<form method="post">
	    <table>
	        <tr>
	            <th>Amount</th>
	            <th>From Currency</th>
	            <th>To Currency</th>
	            
	        </tr>
	        <tr>
	            <td><input type="text" name="money"/></td>
	            <td>
	                <select name="FromCurrency">
	                    <option value="24000">VND</option>
	                    <option value="1">USD</option>
	                </select>
	            </td>
	            <td>
	                <select name="ToCurrency">
	                    <option value="1">USD</option>
	                    <option value="24000">VND</option>
	                </select>
	            </td>
	            <td><button>Convert</button></td>
	         
	        </tr>
	    </table>
    </form>
    <?php
    	if($_SERVER['REQUEST_METHOD'] == "POST"){
    		$money = $_POST['money'];
    		$FromCurrency = $_POST['FromCurrency'];
    		$ToCurrency = $_POST['ToCurrency'];
    		$rate = $ToCurrency/$FromCurrency;
    		$result = $money*$rate;
    		echo "Số tiền sau khi đổi bằng ".$result;
    	}
    ?>
</body>
</html>