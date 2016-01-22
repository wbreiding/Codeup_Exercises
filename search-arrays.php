<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function search($array,$value) {
  $result = array_search($value,$array);
  if (is_integer($result)) {
    return TRUE;
  } else {
    return FALSE;
  }
}

$test1 = search($names, 'Tina');
$test2 = search($names, 'Bob');
var_dump ($test1);
var_dump ($test2);

function compare($array1, $array2) {
  $count = 0;
  foreach ($array1 as $item) {
    $result = array_search($item,$array2);
    if (is_integer($result)) {
      $count++;
    }
  }
  return $count;
}

$test3 = compare($names, $compare);
var_dump($test3);

?>
