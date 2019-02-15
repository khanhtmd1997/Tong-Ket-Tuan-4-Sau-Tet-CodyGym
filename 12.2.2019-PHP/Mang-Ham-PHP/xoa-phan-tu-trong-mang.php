<html>
   
   <head>
      <title>Xóa phần tử mảng trong PHP</title>
   </head>
   <body>
   
       <?php
            $x = array(0, 1, 2, 3, 4);
            echo "Mảng ban đầu gồm:<br> ";  
      			var_dump($x);
            echo "<br>";  
      			unset($x[3]); 
            echo "Mảng sau khi xóa:<br>"; 
      			$x = array_values($x);  
      			echo '';  
      			var_dump($x); 
       ?>
       
   </body>
</html>