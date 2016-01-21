<?php
for ($i=1; $i<=100; $i++) {
  if ($i%2 == 1) {
    continue;
  }
  echo "$i\n";
}

for ($j=1; $j<=100; $j++) {
  echo "$j\n";
  if ($j==10) {
    break;
  }
}
 ?>
