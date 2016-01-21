<?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
     case 1:
         // Output Monday
         echo "It's Monday.\n";
         break;
     case 2:
         // Output Tuesday
         echo "It's Tuesday.\n";
        break;
      case 3:
        echo "It's Wednesday.\n";
        break;
      case 4:
        echo "It's Thursday.\n";
        break;
      case 5:
        echo "It's Friday.\n";
        break;
      case 6:
        echo "It's Saturday.\n";
        break;
      case 7:
        echo "It's Sunday.\n";
        break;
     // etc through day 7
 }

 if ($dayOfWeek == 1) {
   echo "It's Monday.\n";
 } elseif ($dayOfWeek == 2) {
   echo "It's Tuesday.\n";
 } elseif ($dayOfWeek == 3) {
   echo "It's Wednesday.\n";
 } elseif ($dayOfWeek == 4) {
   echo "It's Thursday.\n";
 } elseif ($dayOfWeek == 5) {
   echo "It's Friday.\n";
 } elseif ($dayOfWeek == 6) {
   echo "It's Saturday.\n";
 } else {
   echo "It's Sunday.\n";
 }

 ?>
