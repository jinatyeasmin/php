<?php
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$result=$_POST['operator'];
switch($result){
    case"+": $sum = $num1 + $num2;
        echo "Result: ". $sum ."<br>"; break;
    case "-": $diff= $num1 - $num2; 
        echo "Result: ". $diff ."<br>";break;
    case "*": $product = $num1 * $num2; 
        echo "Result: ". $product ."<br>";break;
    case "/": $division = $num1 / $num2;
        echo "Result:". $division ."<br>";break;
}
?>