<?php

   $numGallons = $_GET['num_of_gallons'];

   if (!is_numeric($numGallons)) {
    echo "The Number of Gallons is not a number";
    echo "<br>";
    return;
  }

   $baseTax = 120;
   $taxQuota = 12000;
   $baseUsageTax = 0;
   $taxRate = 0.05;
   $extraCharge = 60;

   // Check if number of gallons is larger than quota
   if ($numGallons > $taxQuota) {
      $extraTaxBaseQuantity = $numGallons - $taxQuota;   // The amount that the extra tax is calculated on
      $floorCount = floor($extraTaxBaseQuantity/1000); 
   } else if ($numGallons > 0) {
      $extraTaxBaseQuantity = 0;
      $floorCount = 0;
      $taxRate = 0.05;
      $taxQuota = $numGallons;           // Set the tax quota to numGallons where it falls under the quota
   } else {
      $extraTaxBaseQuantity = 0;
      $floorCount = 0;
      $taxRate = 0;  // Set the base tax rate to zero if the number of gallons falls under quota
   }

   $totalTaxToPay = ($baseTax + (($taxQuota*$taxRate) + ($floorCount * $extraCharge)));

   echo "The total tax to pay on {$numGallons} gallons is {$totalTaxToPay}";

?>
