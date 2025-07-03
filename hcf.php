<?php
$num1 = 6;
$num2 = 12;

if ($num1<$num2)
    {
    for($i =$num1; $i >=1; $i--){
        if($num1%$i ==0 && $num2%$i ==0){
            echo $i."<br>";
            break;
        }
    }
}
else
 {
    for($i =$num2; $i >=0; $i--){
        if($num1%$i ==0 && $num2%$i ==0){
            echo $i."<br>";
            break;
        }
    }
}
?>