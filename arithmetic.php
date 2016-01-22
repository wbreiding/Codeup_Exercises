<?php

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    // Add code here
    return $a - $b;
}

function multiply($a, $b)
{
    // Add code here
    return $a * $b;
}

function divide($a, $b)
{
    // Add code here
    return $a/$b;
}

// Add code to test your functions here
$a = 10;
$b = 5;
echo "Addition: ";
echo add($a,$b);
echo PHP_EOL;
echo "Subtraction: ";
echo subtract($a,$b);
echo PHP_EOL;
echo "Multiplication: ";
echo multiply($a,$b);
echo PHP_EOL;
echo "Division: ";
echo divide($a,$b);
echo PHP_EOL;
?>
