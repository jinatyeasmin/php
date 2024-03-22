<?php
$text = "This is ";

$total = 0;
$vowels = Array('a','e','i','o','u');

for ($i=0;$i<strlen($text);$i++)
{
    for ($j = 0;$j<5;$j++)
        if ($text[$i] == $vowels[$j])
        {
            $total++;
            break;
        }
}
echo $total;
?>