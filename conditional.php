<?php
// Conditional Statements in PHP

echo "<h1>Conditional Statements in PHP</h1>";

echo "<h2>If-Else Statement</h2>";
echo "Checking if a number is positive, negative, or zero:<br>";
echo "<h3>Sample code</h3>";
echo "<pre>"
    ."// if statement example\n"
    ."$"."num = 10;\n"
    ."if ("."$"."num > 0) {\n"
    ."    echo 'Number is positive';\n"
    ."}\n\n"
    ."// if-else statement example\n"
    ."$"."num = -5;\n"
    ."if ("."$"."num > 0) {\n"
    ."    echo 'Number is positive';\n"
    ."} else {\n"
    ."    echo 'Number is not positive';\n"
    ."}\n\n"
    ."// if-elseif-else statement example\n"
    ."$"."num = 0;\n"
    ."if ("."$"."num > 0) {\n"
    ."    echo 'Number is positive';\n"
    ."} elseif ("."$"."num < 0) {\n"
    ."    echo 'Number is negative';\n"
    ."} else {\n"
    ."    echo 'Number is zero';\n"
    ."}"
    . "</pre>";
echo "<h3>Output</h3>";

// if statement example
$num = 10;
if ($num > 0) {
    echo "if: Number is positive<br>";
}

// if-else statement example
$num = -5;
if ($num > 0) {
    echo "if-else: Number is positive<br>";
} else {
    echo "if-else: Number is not positive<br>";
}

// if-elseif-else statement example
$num = 0;
if ($num > 0) {
    echo "if-elseif-else: Number is positive<br>";
} elseif ($num < 0) {
    echo "if-elseif-else: Number is negative<br>";
} else {
    echo "if-elseif-else: Number is zero<br>";
}

?>
