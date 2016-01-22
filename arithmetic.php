<?php

function add($a, $b)
{
  if (is_numeric($a) && is_numeric($b)) {
    return $a + $b;
  } else {
    echo "All inputs must be numeric.\n";
  }
}

function subtract($a, $b)
{
  if (is_numeric($a) && is_numeric($b)) {
    return $a - $b;
  } else {
    echo "All inputs must be numeric.\n";
  }
}

function multiply($a, $b)
{
  if (is_numeric($a) && is_numeric($b)) {
    return $a * $b;
  } else {
    echo "All inputs must be numeric.\n";
  }
}

function divide($a, $b)
{
  if (is_numeric($a) && is_numeric($b)) {
    return $a/$b;
  } else {
    echo "All inputs must be numeric.\n";
  }
}

function modulus($a, $b) {
  if (is_numeric($a) && is_numeric($b)) {
    return $a%$b;
  } else {
    echo "All inputs must be numeric.\n";
  }
}

// Add code to test your functions here
$a = 15;
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
echo "Modulus: ";
echo modulus($a,$b);
echo PHP_EOL;
?>
