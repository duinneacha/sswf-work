<?php

   $num1 = $_GET['num1'];
   $num2 = $_GET['num2'];
   $num3 = $_GET['num3'];

   if (!is_numeric($num1)) {
    echo "The First Number is not a number";
    echo "<br>";
    return;
  }
  if (!is_numeric($num2)) {
    echo "The Second Number is not a number";
    echo "<br>";
    return;
  }
  if (!is_numeric($num3)) {
    echo "The Third Number is not a number";
    echo "<br>";
    return;
  }

   $highestNum = 0;
   $middleNum = 0;
   $lowestNum = 0;

   // Rank with the first number as primary
   if (($num1 >= $num2) && ($num1 >= $num3)) {
      $highestNum = $num1; $middleNum = $num2; $lowestNum = $num3;
      if ($num3 >= $num2) {
         $middleNum = $num3; $lowestNum = $num2;
      }
   }

   // Rank with the second number as primary
   if (($num2 >= $num1) && ($num2 >= $num3)) {
      $highestNum = $num2; $middleNum = $num3; $lowestNum = $num1;
      if ($num1 >= $num3) {
         $middleNum = $num1; $lowestNum = $num3;
      }
   }

   // Rank with the third number as primary
   if (($num3 >= $num1) && ($num3 >= $num2)) {
      $highestNum = $num3; $middleNum = $num1; $lowestNum = $num2;
      if ($num2 >= $num1) {
         $middleNum = $num2; $lowestNum = $num1;
      }
   }

   echo "{$highestNum}, {$middleNum}, {$lowestNum}";

?>