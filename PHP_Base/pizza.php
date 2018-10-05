<?php

$size = $_GET['size'];
$crust = $_GET['crust'];


if(isset($_GET['toppings'])){
   $toppingsChecked = $_GET['toppings'];
   $toppingsSelected = true;
}else{
   $toppingsChecked = "";
   $toppingsSelected = false;
}

$deliveryChecked = false;
if (isset($_GET['delivery'])) {
   $deliveryChecked = true;
} else {
   $deliveryChecked = false;
}
   

$totalPizzaCost = 0;

if ($size == "small") {
   $totalPizzaCost = 8;
} else if ($size == "medium") {
   $totalPizzaCost = 12;
} else if ($size == "large") {
   $totalPizzaCost = 16;
}


if ($crust == "deep") {
   $totalPizzaCost += 2;
}

$toppingsString = "";
if ($toppingsSelected) {
   for($loopCounter=0; $loopCounter < count($toppingsChecked); $loopCounter++){
      if ($toppingsChecked[$loopCounter] == "mushrooms") {
         $totalPizzaCost += .5;
         $toppingsString .= "Mushrooms ";
      } else if ($toppingsChecked[$loopCounter] == "olives") {
         $totalPizzaCost += .5;
         $toppingsString .= "Olives ";
      } else if ($toppingsChecked[$loopCounter] == "nail") {
         $totalPizzaCost += 1;
         $toppingsString .= "Nail (eeuuurrrgh) ";
      } else if ($toppingsChecked[$loopCounter] == "beef") {
         $totalPizzaCost += 1.5;
         $toppingsString .= "Spicy Beef";
      }
     }
}

$deliveryInstructions = "No Delivery";


if ($deliveryChecked) {
   $deliveryInstructions = "To be delivered";
   $totalPizzaCost += 3;
}


echo "Thank you for your order";
echo "<br>";
echo "You ordered a {$crust} {$size} pizza with $loopCounter toppings [$toppingsString] ({$deliveryInstructions})";
echo "<br>";
echo "The total cost of the pizza is {$totalPizzaCost} eurines";
echo "<br>";
?>
