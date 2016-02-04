<?php

require_once "rectangle.php";
require_once "square.php";

$rect1 = new Rectangle(2,7);
echo $rect1->area();
echo "\n";
echo $rect1->perimeter();
echo "\n";
$rect2 = new Rectangle(3,4);
echo $rect2->area();
echo "\n";
echo $rect2->perimeter();
echo "\n";

$square1 = new Square(2);
echo $square1->area();
echo "\n";
echo $square1->perimeter();
echo "\n";

$square1 = new Square(3);
echo $square1->area();
echo "\n";
echo $square1->perimeter();
echo "\n";


 ?> ?>
