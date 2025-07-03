<?php
$number = 8764325;
$sum = $number%10;
while ($number>10){
    $div = $number%10;
    $number = ($number -$div)/10;
}
$sum = $sum + $number;
echo $sum;
?>