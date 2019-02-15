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
  <h2>Đọc số tiếng anh</h2>
  <form method="post">
    <input type="number" name="inventmentAmount" placeholder="Lượng tiền đầu tư ban đầu"/>
    <input type="number" name="yearlyInterestRate" placeholder=" Lãi suất một năm"/>
    <input type="number" name="numberofYears" placeholder="Số năm đầu tư"/>
    <input type = "submit" id = "submit" value = "Tính tiền"/>
  </form>
  <?php
  	 if($_SERVER['REQUEST_METHOD'] == "POST"){
        $inventmentAmount = $_POST["inventmentAmount"];
        $yearlyInterestRate = $_POST["yearlyInterestRate"];
        $numberofYears = $_POST["numberofYears"];
        $valueOneYear = $inventmentAmount + ($inventmentAmount * $yearlyInterestRate * 0.01);
        $valueFuture = $valueOneYear * $numberofYears;
        echo "Số tiền sau ".$numberofYears." là".$valueFuture;
    }
  ?>
</body>
</html>