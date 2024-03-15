<?php
$a=5;$b=10;$c=2;
echo"<br>The first number is:".$a;
echo"<br>The second number is:".$b;
echo"<br>The third number is:".$c;
if($a>$b && $a>$c){
    echo"<br>the first number is greatest".$a;
}else if ($b>$a && $b>$c){
    echo"<br>the second number is greatest".$b;
}else{
    echo "<br>The third number is the greatest".$c;
}
?>
<!-- nestedif -->
<?php 
$x = 34;
$y = 87;
$z=15;
if($x>$y){
    if($x>$z){
        echo "greater num is".$x;
    }else{
        echo "greater num is".$z;
    }
}elseif($y>$z){
    echo "greater num is".$y;
}else{
    echo "greater num is".$z;
}
?>
<!-- using ternary operator -->
<?php
$a=10;
$b=5;
echo($a>$b)?"<br>$a is greater":"<br>$b is greater";
?>
