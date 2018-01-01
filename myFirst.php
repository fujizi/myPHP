<?php
$x=5; // Global vars

function myTest()
{
    $y=10; // local vars
    echo "<p>Test variables inside the function:<p>";
    echo "Variable x is: $x";
    echo "<br>";
    echo "Variable y is: $y";
}

myTest();

echo "this is a test for PHP."
?>