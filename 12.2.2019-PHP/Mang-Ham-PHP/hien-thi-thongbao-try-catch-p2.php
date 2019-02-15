<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
   <div>         
      <form method="post">             
         <input type="number" name="enter" placeholder="nhập">             
         <input id="submit" type="submit" name="submit" value="Result">         
      </form>     
   </div>  
<?php
function random(){
 if ($_SERVER["REQUEST_METHOD"] == "POST") {  
   $enter = $_POST['enter'];
   $arrayNumber = array(1,2,3,4,5,6,7,4,2,3,
                        658,454,343,2,3,56,7676,342,1213,1201,
                        5,6,7,4,434,111,2223,66,788,66
                     );
   $random_key = array_rand($arrayNumber,20);
   if($enter < 0 || $enter >= 100){
      throw new Exception("Vui lòng nhập trong khoảng từ 1 đến 99");
   }
   else{
      echo $arrayNumber[$random_key[0]]."<br>";echo $arrayNumber[$random_key[1]]."<br>";
      echo $arrayNumber[$random_key[2]]."<br>";echo $arrayNumber[$random_key[3]]."<br>";
      echo $arrayNumber[$random_key[4]]."<br>";echo $arrayNumber[$random_key[5]]."<br>";
      echo $arrayNumber[$random_key[6]]."<br>"; echo $arrayNumber[$random_key[7]]."<br>";
      echo $arrayNumber[$random_key[8]]."<br>";echo $arrayNumber[$random_key[9]]."<br>";
      echo $arrayNumber[$random_key[0]]."<br>";echo $arrayNumber[$random_key[1]]."<br>";
      echo $arrayNumber[$random_key[2]]."<br>";echo $arrayNumber[$random_key[3]]."<br>";
      echo $arrayNumber[$random_key[4]]."<br>";echo $arrayNumber[$random_key[5]]."<br>";
      echo $arrayNumber[$random_key[6]]."<br>";echo $arrayNumber[$random_key[7]]."<br>";
      echo $arrayNumber[$random_key[8]]."<br>";echo $arrayNumber[$random_key[9]]."<br>";
   }
 }
}
 try {
   random();
   echo "<br>";
 }
 
 /* catch exception */
 catch(Exception $e) {
   echo 'Message: ' .$e->getMessage();
 }