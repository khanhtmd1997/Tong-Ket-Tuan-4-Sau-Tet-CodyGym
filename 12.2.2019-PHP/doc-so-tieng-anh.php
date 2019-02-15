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
    <input type="text" name="search" placeholder="Nhập số cần đọc"/>
    <input type = "submit" id = "submit" value = "Tìm"/>
  </form>
  <?php
      
      if($_SERVER['REQUEST_METHOD'] == "POST"){
        $searchnumber = $_POST["search"];
        $soMot = "One";
        $soHai = "Two";
        $soBa = "Three";
        $soBon = "Four";
        $soNam = "Five";
        $soSau = "Six";
        $soBay = "Seven";
        $soTam = "Eight";
        $soChin = "Nine";
        $soMuoi = "Ten";
        $teen = "Teen";
        if($searchnumber > 0 && $searchnumber <=10){
          switch($searchnumber){
            case 1:
              echo  $searchnumber." is ". $soMot;
              break;
            case 2:
              echo $searchnumber." is ". $soHai;
              break;
            case 3:
              echo $searchnumber." is ". $soBa;
              break;
            case 4:
              echo $searchnumber." is ". $soBon;
              break;  
            case 5:
              echo $searchnumber." is ". $soNam;
              break;
            case 6:
              echo $searchnumber." is ". $soSau;
              break;
            case 7:
              echo $searchnumber." is ". $soBay;
              break;
            case 8:
              echo $searchnumber." is ". $soTam;
              break;
            case 9:
              echo $searchnumber." is ". $soChin;
              break;
            case 10:
              echo $searchnumber." is ". $soMuoi;
              break;
          }
        }
        else if($searchnumber < 20){
          switch($searchnumber){
            case 11:
              echo $searchnumber." is "." eleven";
              break;
            case 12:
              echo $searchnumber." is "." twelve";
              break;
            case 13:
              echo $searchnumber." is ". "Thir".$teen;
              break;
            case 14:
              echo $searchnumber." is ". $soBon.$teen;
              break;
            case 15:
              echo $searchnumber." is ". "Fif".$teen;
              break;
            case 16:
              echo $searchnumber." is ". $soSau.$teen;
              break;
            case 17:
              echo $searchnumber." is ". $soBay.$teen;
              break;
            case 18:
              echo $searchnumber." is ". $soTam.$teen;
              break;
            case 19:
              echo $searchnumber." is ". $soChin.$teen;
              break;
          }
        }
      }
  ?>
</body>
</html>