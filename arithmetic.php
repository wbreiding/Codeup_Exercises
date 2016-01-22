<?php

function add($a, $b)
{
  if (is_numeric($a) && is_numeric($b)) {
    return $a + $b;
  } else {
    throwErrorMessage($a,$b);
  }
}

function subtract($a, $b)
{
  if (is_numeric($a) && is_numeric($b)) {
    return $a - $b;
  } else {
    throwErrorMessage($a,$b);
  }
}

function multiply($a, $b)
{
  if (is_numeric($a) && is_numeric($b)) {
    return $a * $b;
  } else {
    throwErrorMessage($a,$b);
  }
}

function divide($a, $b)
{
  if (is_numeric($a) && is_numeric($b) && $b != 0) {
    return $a/$b;
  } else {
    throwErrorMessage($a,$b,true);
  }
}

function modulus($a, $b) {
  if (is_numeric($a) && is_numeric($b) && $b != 0) {
    return $a%$b;
  } else {
    throwErrorMessage($a,$b,true);
  }
}

function throwErrorMessage($a, $b, $zero = false) {
  if ($zero) {
      echo "{$a} and {$b} must be numeric and the second number can not be 0.\n";
  } else {
    echo "{$a} and {$b} must be numeric.\n";
  }
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
echo "Modulus: ";
echo modulus($a,$b);
echo PHP_EOL;
?>
