<?php
require_once "model.php";
require_once "user.php";

$test = new Model();
$test->name = 'Wendy';
$test->birthdate = '1976-02-04';
$test->age = 40;

echo $test->name;
echo "\n";
echo $test->birthdate;
echo "\n";
echo $test->age;
echo "\n";

echo User::getTableName();

 ?>
