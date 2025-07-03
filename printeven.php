<?php
$count = 0;
$sum = 0;
while ($count <= 100) {
    if ($count % 2 == 0) {
        echo "Even number: $count<br>";
        $c = 1;
        while ($c <= 10) {
            echo $count . " * " . $c . " = " . ($count * $c) . "<br>";
            $c++;
        }
        $sum += $count;
    }
    $count++;
}
echo "Sum of first 100 even numbers: $sum";
?>