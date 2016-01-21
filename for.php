<?php
$startNumber = 0;
$endNumber = 0;
fwrite(STDOUT,'Please enter a starting number: ');
$startNumber = trim(fgets(STDIN));
fwrite(STDOUT,'Please enter an ending number: ');
$endNumber = trim(fgets(STDIN));

if (is_numeric($startNumber) && is_numeric($endNumber)){
  for ($i = $startNumber; $i <= $endNumber; $i++) {
    echo "{$i}\n";
  }
}
 ?>
