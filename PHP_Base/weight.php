<?php

$weightKG = $_GET['weight_kg'];

if (!is_numeric($weightKG)) {
   echo "Please enter a number representing your weight in KG";
   return;
}

$poundRatio = 2.20462262;
$weightInPounds = floor($weightKG * $poundRatio);
$weightInStones = floor($weightInPounds / 14);
$poundsRemaining = $weightInPounds%14;

echo "<p>";
echo "You weigh {$weightKG} kg, which is {$weightInStones} stone and {$poundsRemaining} pounds.";
echo "</p>";

?>