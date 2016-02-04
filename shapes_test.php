<?php

require_once "rectangle.php";
require_once "square.php";

$rect1 = new Rectangle(5,7);
echo $rect1->area();
echo "\n";
$rect2 = new Rectangle(2,4);
echo $rect2->area();
echo "\n";

$square1 = new Square(2,2);
echo $square1->area();
echo "\n";
echo $square1->perimeter();
echo "\n";

$square1 = new Square(3,3);
echo $square1->area();
echo "\n";
echo $square1->perimeter();
echo "\n";


 ?> ?>
