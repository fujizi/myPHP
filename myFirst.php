<?php
$x=5; // ȫ�ֱ��� Global vars

function myTest()
{
    $y=10; // �ֲ����� local vars
    echo "<p>Test variables inside the function:<p>";
    echo "Variable x is: $x";
    echo "<br>";
    echo "Variable y is: $y";
}

myTest();

echo "<p>Test variables outside the function:<p>";
echo "Variable x is: $x";
echo "<br>";
echo "Variable y is: $y";
?>