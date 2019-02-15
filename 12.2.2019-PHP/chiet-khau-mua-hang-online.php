<!DOCTYPE html>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <head>
        <style> 
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 5px solid #ccc; 
            border-radius: 10px;
            padding: 12px 10px 12px 10px;
        }
        input[type=number] {
            width: 300px;
            font-size: 16px;
            border: 5px solid #ccc; 
            border-radius: 10px;
            padding: 12px 10px 12px 10px;
        }
        #submit {
            border-radius: 10px;
            padding: 10px 32px;
            font-size: 20px;
        }
        </style>
    </head>
<body>
  <h2>Tính chiếc khấu</h2>
  <form method="post">
    <input type="text" name="ProductDescription" placeholder="Mô tả của sản phẩm"/>
    <input type="number" name="ListPrice" placeholder=" Giá niêm yết của sản phẩm"/>
    <input type="number" name="DiscountPercent" placeholder="Tỷ lệ chiết khấu (phần trăm)"/>
    <input type = "submit" id = "submit" value = "Tính chiết khấu"/>
  </form>
  <?php
  	 if($_SERVER['REQUEST_METHOD'] == "POST"){
        $ProductDescription = $_POST["ProductDescription"];
        $ListPrice = $_POST["ListPrice"];
        $DiscountPercent = $_POST["DiscountPercent"];
        $DiscountAmount = $ListPrice * $DiscountPercent * 0.1;
        echo "Số tiền sau chiếc khấu ".$DiscountAmount;
    }
  ?>
</body>
</html>