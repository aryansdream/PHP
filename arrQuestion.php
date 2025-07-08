<?php
function CalculateTotalMarks($a)
{$sum = 0;
    echo "Marks = ";
    foreach($a as $m){
        echo $m.", ";
        $sum = $sum+ $m;
    }
    echo "<br>";
    
    echo "<b>"."Total Marks = ".$sum;
}

$marks = array(87,63,49,91,72,88);
CalculateTotalMarks($marks);