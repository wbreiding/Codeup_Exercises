<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function combine_arrays($array1, $array2) {
  $sameArray = compare($array1,$array2);
  $newArray = array();
  foreach ($array2 as $key=>$items) {
      array_push($newArray, $array1[$key]);
      foreach ($sameArray as $index) {
        if ($index == $key) {
          continue 2;
        }
      }
      array_push($newArray,$items);
    }
  return $newArray;
}

function search($array,$value) {
  $result = array_search($value,$array);
  if (is_integer($result)) {
    return TRUE;
  } else {
    return FALSE;
  }
}

function compare($array1, $array2) {
  $newArray = array();
  foreach ($array1 as $item) {
    $result = array_search($item,$array2);
    if (is_integer($result)) {
      array_unshift($newArray,$result);
    }
  }
  return $newArray;
}

$test = combine_arrays($names, $compare);
var_dump($test);

?>
