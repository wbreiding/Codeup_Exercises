<?php
// Converts array into list n1, n2, ..., and n3
function humanizedList($array) {
  sort($array);
  $last = array_pop($array);
  $lastArray = explode(' ',$last);
  array_unshift($lastArray, 'and');
  $last = implode(' ', $lastArray);
  array_push($array, $last);
  return implode(', ', $array);
}

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistsArray = explode(', ',$physicistsString);
// Humanize that list
 $famousFakePhysicists = humanizedList($physicistsArray);


echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";

 ?>
