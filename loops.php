<?php
echo "<h1>Loops in PHP</h1>";
echo "<h2>While Loop</h2>";
echo "Counting from 1 to 5:<br>";
echo "Using a while loop:<br>";
echo "-------------------------<br>";
echo "<h3>Sample code</h3>";
echo "<pre>"."$"."count = 1;
while ("."$"."count <= 5) {
    echo Count is: "."$"."count<br>;"
."$"."count++;
}</pre>";

echo "<h3>Output</h3>";
$count = 1;
while ($count <= 5) {
    echo "Count is: $count<br>";
    $count++;
}
echo "<h2>For Loop</h2>";
echo "Counting from 1 to 5:<br>";
echo "Using a for loop:<br>";
    echo "-------------------------<br>";
    echo "<h3>Sample code</h3>";
echo "<pre>for ("."$"."i = 1; "."$"."i <= 5; "."$"."i++) {
    echo Count is: "."$"."i<br>;
}</pre>";
echo "<h3>Output</h3>";
for ($i = 1; $i <= 5; $i++) {
    echo "Count is: $i<br>";
}
echo "<h2>Do-While Loop</h2>";
echo "Counting from 1 to 5:<br>";
echo "Using a do-while loop:<br>";
echo "-------------------------<br>";
echo "<h3>Sample code</h3>";
echo "<pre>"."$"."count = 1;
do {
    echo Count is: "."$"."count<br>;
    "."$"."count++;
} while ("."$"."count <= 5);</pre>";
echo "<h3>Output</h3>";
$count = 1;
do {
    echo "Count is: $count<br>";
    $count++;
} while ($count <= 5);
?>