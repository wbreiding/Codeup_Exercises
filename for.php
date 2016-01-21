<?php
$startNumber = 0;
$endNumber = 0;
fwrite(STDOUT,'Please enter a starting number: ');
$startNumber = trim(fgets(STDIN));
fwrite(STDOUT,'Please enter an ending number: ');
$endNumber = trim(fgets(STDIN));
fwrite(STDOUT,'What increment would you like to count by (1,2,10,...): ');
$increment = trim(fgets(STDIN));

if ($increment == "") {
  $increment = 1;
}
if (is_numeric($startNumber) && is_numeric($endNumber) && is_numeric($increment)){
  for ($i = $startNumber; $i <= $endNumber; $i+=$increment) {
    echo "{$i}\n";
  }
} else {
  echo "You must enter numbers to play this game.\n";
}
 ?>
