<?php
$num = 0;
$s = 0;
if($num ==2){
    echo"2 is Prime";}
else if($num<2){
    echo" Enter a Natural No. greater than 1";
}
else{
for ($i=2; $i<$num; $i++){
    if($num%$i==0){
    $s=1;
    break;}
    }

if ($s==1){
    echo $num." is not Prime";   }
else{
    echo $num." is prime";
}
}