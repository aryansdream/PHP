<?php
$rollNo = array(26,27,100,90,16,7,28);
$car = array("BMW","Mercedes","Toyota");
$marks = array(55.5,67.5,95.6,35.4);
$len= count($rollNo);
echo"<ul>";
for ($i =0;$i<$len; $i++){
    echo "<li>".$rollNo[$i]."<br>";
}
echo"</ul>";