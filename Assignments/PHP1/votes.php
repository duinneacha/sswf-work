

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Voting Analysis</title>
</head>
<body>
   
<?php

   $ageType = $_GET['age'];
   $residency = $_GET['residency'];
   $nationality = $_GET['nationality'];

   $qualificationString = "";
   $qualificationList = "";

  if ($ageType == "adult" && $residency == "home") {
    $qualificationString = "You are eligible to vote in the following:";
  }

  if ($nationality == "non_eu") {
    $qualificationList .= "<li>Local Elections</li>";
   }

   if ($nationality == "other_eu") {
    $qualificationList .= "<li>European Elections</li>";
    $qualificationList .= "<li>Local Elections</li>";
   }

   if ($nationality == "british") {
    $qualificationList .= "<li>Dáil Elections</li>";
    $qualificationList .= "<li>European Elections</li>";
    $qualificationList .= "<li>Local Elections</li>";
   }

   if ($nationality == "irish") {
    $qualificationList .= "<li>Referenda</li>";
    $qualificationList .= "<li>Presidential Elections</li>";
    $qualificationList .= "<li>Dáil Elections</li>";
    $qualificationList .= "<li>European Elections</li>";
    $qualificationList .= "<li>Local Elections</li>";
   }

   if ($ageType == "child") {
     $qualificationString = "You are ineligible to vote";
     $qualificationList = "";
   }

   if ($residency == "abroad") {
    $qualificationString = "You are ineligible to vote";
    $qualificationList = "";
   }
   
   echo $qualificationString; 
   echo "<br>";
   echo "<ul>";
   echo $qualificationList;
   echo "</ul>";

?>


</body>
</html>