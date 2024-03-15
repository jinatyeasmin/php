<?php
$a=5;
$b=7;
echo"The value of a is ".$a."<br>";
echo"The value of b is ".$b."<br>";
$temp=$a;
$a=$b;
$b=$temp;
echo"The new value of a is ".$a;"<br>";
echo"<br>And the new value of b is ".$b."<br>";
?>
<!-- swap using operators -->
<?php
$x=4;
$y=6;
echo"The value of x is ".$x."<br>";
echo"The value of y is ".$y."<br>";
$x= $x + $y;
$y = $x - $y;
$x = $x - $y;
echo"The new value of x is ".$x;"<br>";
echo"<br>And the new value of y is ".$y."<br>";
