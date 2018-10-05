<?php

   $fruitType = $_GET['fruit'];
   $weight = $_GET['weight'];

   if (!is_numeric($weight)) {
      echo "Please enter a number a valid number for the weight";
      return;
   }

   $fruit_prices = array('Apples' => 1.59, 'Pears' => 2.34, 'Kumquats' => 4.05, 'Jujubes' => 2.34);

   $price = 0;
   if ($fruitType == 'Apples') {
      $price = $fruit_prices['Apples'];
   } else if ($fruitType == 'Pears') {
      $price = $fruit_prices['Pears'];
   } else if ($fruitType == 'Kumquats') {
      $price = $fruit_prices['Kumquats'];
   } else if ($fruitType == 'Jujubes') {
      $price = $fruit_prices['Jujubes'];
   }
   $totalPrice = $price * $weight;
   echo "{$weight}kg of {$fruitType} costs {$weight} x {$price}, which is {$totalPrice}."

?>