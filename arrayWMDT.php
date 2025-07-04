<?php 
$fruitsNprice = array("Apple: ", 100,"Mango: ",60,"Banana: ",50,"Pineapple :",70);
$len= count($fruitsNprice);
echo"<ul>";
for ($i =0;$i<$len;){
    echo "<li>".$fruitsNprice[$i].$fruitsNprice[$i+1]."<br>";
     $i=$i+2;
}
echo"</ul>";
