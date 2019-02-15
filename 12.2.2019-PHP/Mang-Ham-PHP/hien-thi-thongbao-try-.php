<?php
 function calc($x,$y) {
   if(($x==0 && $y==0)||($y==0)) {
     throw new Exception("Không được nhập hai số bằng 0 hoặc số thứ hai bằng 0");
   }
   else {
   		$ketQuaCong = $x + $y;
   		$ketQuaTru = $x - $y;
   		$ketQuaNhan = $x * $y;
   		$ketQuaChia = $x / $y;
   }
   echo $x." + ".$y." = ".$ketQuaCong."<br>".
   $x." + ".$y." = ".$ketQuaTru."<br>".
   $x." + ".$y." = ".$ketQuaNhan."<br>".
   $x." + ".$y." = ".$ketQuaChia;
 }
 
 try {
   calc(5,5);
   echo "<br>";
 }
 catch(Exception $e) {
   echo 'Message: ' .$e->getMessage();
 }
 try {
   calc(0,1);
   echo "<br>";
 } 
 catch(Exception $e) {
   echo 'Message: ' .$e->getMessage();
 }
 try {
   calc(0,0);
 } 
 catch(Exception $e) {
   echo '<br>Message: ' .$e->getMessage();
 }
 try {
   calc(1,0);
   echo "<br>";
 }
 catch(Exception $e) {
   echo '<br>Message ' .$e->getMessage();
 }
?>
