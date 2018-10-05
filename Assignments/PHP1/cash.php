


<?php

  //Coins
  $cents = 7;
  $nickels = 3;
  $dimes = 34;
  $quarters = 2;
  $halfDollars = 4;
  $dollars = 9;

  // Notes
  $oneDollarNotes = 3;
  $TwoDollarNotes = 1;
  $fiveDollarNotes = 3;
  $tenDollarNotes = 1;
  $twentyDollarNotes = 3;
  $fiftyDollarNotes = 1;
  $hundredDollarNotes = 2;

  $totalCents = 0;

  // cents
  $totalCents += ($cents);
  $totalCents += ($nickels*5);
  $totalCents += ($dimes*10);
  $totalCents += ($quarters*25);
  $totalCents += ($halfDollars*50);
  $totalCents += ($dollars*100);
  $totalCents += ($oneDollarNotes*100);
  $totalCents += ($TwoDollarNotes*200);
  $totalCents += ($fiftyDollarNotes*500);
  $totalCents += ($tenDollarNotes*1000);
  $totalCents += ($twentyDollarNotes*2000);
  $totalCents += ($fiftyDollarNotes*5000);
  $totalCents += ($hundredDollarNotes*10000);
  
  echo "You have {$totalCents} cents.";



?>