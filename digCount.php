<?php
$number=8764326767344;
$count=0;
while($number>0)
{
    $count++;
    $div = $number % 10; // Get the last digit
    $number=(($number-$div)/10);
}

echo "Total digits: " . $count;
?>