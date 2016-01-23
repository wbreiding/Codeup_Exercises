<?php
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(',',$physicistsString);
$lastPhysicist = array_pop($physicistsArray);
$lastPhysicistArray = explode(' ',$lastPhysicist);
array_shift($lastPhysicistArray);
array_unshift($lastPhysicistArray, ' and');
$lastPhysicist = implode(' ', $lastPhysicistArray);
array_push($physicistsArray, $lastPhysicist);
$famousFakePhysicists = implode(',', $physicistsArray);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";

 ?>
