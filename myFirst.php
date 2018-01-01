<?php
$x=5; // 全局变量 Global vars

function myTest()
{
    $y=10; // 局部变量 local vars
    echo "<p>Test variables inside the function:<p>";
    echo "Variable x is: $x";
    echo "<br>";
    echo "Variable y is: $y";
}

myTest();

echo "this is a test for PHP."
?>