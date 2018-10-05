<?php

$house = $_GET['house'];
$buyer = $_GET['buyer'];
$buyerType = $_GET['occupation'];
$propertyPrice = $_GET['price'];
$propertyArea = $_GET['area'];
$stampDutyBand1 = 125000;
$stampDutyBand2 = 875000;
$stampDutyBand3 = 1000000;
$band1Rate = 0.00;
$band2Rate = 0.07;
$band3Rate = 0.09;
$stampDuty = 0.00;
$exemptionGranted = false;

if (!is_numeric($propertyPrice)) {
  echo "The Price Entered is not a number";
  echo "<br>";
  return;
}

if (!is_numeric($propertyArea)) {
  echo "The Area Entered is not a number";
  echo "<br>";
  return;
}



if($house == "new" && $buyer == "first" && $buyerType = "occupation") {
   $exemptionGranted = true;
}

if ($propertyArea < 125) {
  $exemptionGranted = true;
}

if (!$exemptionGranted) {

  if ($propertyPrice < $stampDutyBand1) {
    $stampDuty = 0.00;
  } else if ($propertyPrice >= $stampDutyBand1 && $propertyPrice < $stampDutyBand3) {
    
    $stampDuty = ($propertyPrice-$stampDutyBand1) * $band2Rate;
  } else if ($propertyPrice >= $stampDutyBand3) {
  
    // Calculate the first rate
    $stampDuty = $stampDutyBand2 * $band2Rate;
    
    // Calculate the tax on the remainder
    $stampDuty += ($propertyPrice - ($stampDutyBand1 + $stampDutyBand2)) * $band3Rate;
  }
}

echo "<br>";
echo "The Stamp Duty payable is {$stampDuty} eurines.";

?>