
<?php

   $theStake = $_GET['stake'];

   if (!is_numeric($theStake)) {
    echo "The Stake is not a number";
    echo "<br>";
    return;
  }

   $winnings = 0;
   $roll1 = rand(1, 6);
   $roll2 = rand(1, 6);
   $roll3 = rand(1, 6);
  
   if ($roll1 == $roll2) {
      if ($roll1 == $roll3) {
         $winnings = $theStake*4;
      }
   }
   echo "Roll1 is {$roll1}, Roll2 is: {$roll2}, Roll3 is: {$roll3}. Your winnings are : {$winnings}";
?>