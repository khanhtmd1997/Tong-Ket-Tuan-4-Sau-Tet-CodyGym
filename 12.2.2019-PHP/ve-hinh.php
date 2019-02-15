<div style="line-height:60%;font-size:200%;">
<?php
    for($x=1;$x<=5;$x++){
        for($y=1;$y <= $x;$y++){
            echo "x";
            if($y<$x){
                echo "";
            }
        }
        echo "<br/>";
    }
?>

<hr>
<?php
    $chieudai = 6;
    $chieurong = 3;
    for($r=1;$r<($chieurong+1);$r++){
        for($d=1;$d<($chieudai+1);$d++){
            echo ' * ';
        }
        echo "<br/>";
    }
    echo "";
?>
<hr>
<?php
    for($x=7;$x>=1;$x--){
        for($y=1;$y <= $x;$y++){
            echo "x";
            if($y<$x){
                echo "";
            }
        }
        echo "<br/>";
    }
?>

<!-- 
<script type="text/javascript">
function tamgiac() {
$size=5;
for($r=1;$r<($size+1);$r++){
 for($c=1;$c<($r+1);$c++){
  document.write('O');
 }
 document.write('<br>');
}
document.write(' ');
}
tamgiac();
</script> -->
</div>