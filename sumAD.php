<?php
$number=87234;
echo "The number is ".$number."<br>";
$sum=0;
while($number>0){
    $rem=$number%10;
    $sum+=$rem;
    $number= ($number-$rem)/10;
}
echo "sum of all digits are :".$sum;
?>