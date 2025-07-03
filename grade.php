<?php

$science = 85;
echo "Science: $science<br>";
$math = 90;
echo "Math: $math<br>";
$english = 88;
echo "English: $english<br>";

$total = $science + $math + $english;
$average = $total / 3;
echo "Total: $total<br>";
echo "Average: $average<br>";

if (0 > $average || $average > 100) {
    echo "Invalid average score.";
    exit;
}
if ($average >= 90) {
    echo "Grade: A+";
} elseif ($average >= 80) {
    echo "Grade: A";
} elseif ($average >= 70) {
    echo "Grade: B";
}
elseif ($average >= 60) {
    echo "Grade: C";
}
elseif ($average >= 50) {
    echo "Grade: D";
} elseif ($average >= 33) {
    echo "Grade: E";
}
else {
    echo "Grade: Fail";
}
?>