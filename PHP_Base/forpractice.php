<?php
echo "Ten Numbers: ";
for ($loopA = 0; $loopA <= 9; $loopA++) {
   echo $loopA." ";
}

echo "<br>";
echo "Eleven Numbers: ";
for ($loopB = 0; $loopB <= 10; $loopB++) {
   echo $loopB." ";
}

echo "<br>";
echo "Teenage Years: ";
for ($loopC = 0; $loopC <= 100; $loopC++) {
  if ($loopC > 12 && $loopC < 20) {
    echo $loopC." ";
  }
}

echo "<br>";
echo "Evens: ";
for ($loopD = 1; $loopD <= 21; $loopD++) {
  if ($loopD%2 == 0) {
    echo $loopD." ";
  }
 }

 echo "<br>";
 echo "Descending odds: ";
 for ($loopE = 20; $loopE >= 0; $loopE--) {
 
   if ($loopE%2 == 1) {
     echo $loopE." ";
   }
  }
?>