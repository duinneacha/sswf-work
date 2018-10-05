<?php

function validateNumber($number) {
  echo '<br>';
  if (!is_numeric($number)) {
    echo "Please enter a valid number in the range 4-24";
    return false;
 }
 if ($number < 4 || $number > 24) {
   echo "The number you entered ({$number}) is outside of the dress size range (4-24)";
   return false;
 }

 return true;
}

$dressSize = $_GET['size'];

$sizeOK = validateNumber($dressSize);
if ($sizeOK) {
  echo "The dress size {$dressSize} is OK - Thank you!";
}
?>