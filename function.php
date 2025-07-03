<?php
function aryanadds($num1,$num2){
echo"Sum of ".$num1." and ".$num2." is ".$num1+$num2."<br>";
}
function aryansubs($num1,$num2){
echo"Difference of ".$num1." and ".$num2." is ".$num1-$num2."<br>";
}
function aryanmultiplies($num1,$num2){
echo"Multiplication of ".$num1." and ".$num2." is ".$num1+$num2."<br>";
}
function aryandivides($num1,$num2){
echo"Division of ".$num1." and ".$num2." is ".$num1/$num2."<br>";
}

$a = 23;
$b = 24;
$c = 3;
aryanadds($a,$b);
aryandivides($b,$c);
aryanmultiplies($a,$c);
aryansubs($a,$c);
?>