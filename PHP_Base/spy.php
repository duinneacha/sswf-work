<?php

   $firstName = $_GET['fname'];
   $lastName = $_GET['sname'];

   if (empty($firstName) || empty($lastName)) {
      echo "Please enter both your first and last name";
      return;
   }

   $firstNameUpper = ucfirst($firstName);
   $lastNameUpper = ucfirst($lastName);

   echo "<p>";
   echo "<h1> The story of {$firstNameUpper} {$lastNameUpper}.</h1>";
   echo "The story began with . . .";
   echo "</p>";
   echo "<p>";
   echo "Your name is {$lastNameUpper}, {$firstNameUpper} {$lastNameUpper}.";
   echo "</p>";
   echo "<p>";
   echo "The story ended with . . .";
   echo "<i>{$lastNameUpper} died!</i>";
   echo "</p>"
?>