<?php

   $feet = $_GET['feet'];
   $inches = $_GET['inches'];

   if (!is_numeric($feet)) {
      echo "Please enter a number representing your height in feet";
      return;
   }
   if (!is_numeric($inches)) {
      echo "Please enter a number representing the inches of your height";
      return;
   }

   if ($inches < 0 || $inches > 11) {
      echo "Invalid entry - Inches range from 0 to 11";
      return;
   }

   $metricConversionRatio = 2.54;
   $totalCentimeters = round(($feet * 12 * $metricConversionRatio) + ($inches * $metricConversionRatio));


   $meters = floor(($totalCentimeters/100));
   $centimeters = $totalCentimeters%100;
?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <style>
      table 
      {
         margin-left : auto;
         margin-right : auto;
         border : solid 1px black;
         border-collapse: collapse;
      }

      caption
      {
         text-align : center;
         color : white;
         background-color : black;
      }

      th
      {
         color : white;
         background-color : black;
      }

      th, td
      {
         border : solid 1px black;
         text-align : center;
      }
   </style>
   <title></title>
</head>
   <body>

<?php
    echo "<table>";
    echo "<tr>";
    echo "<th>Imperial</th>";
    echo "<td>{$feet}</td>";
    echo "<td>feet/foot</td>";
    echo "<td>{$inches}</td>";
    echo "<td>inch(es)</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Metric</th>";
    echo "<td>{$meters}</td>";
    echo "<td>metre(s)</td>";
    echo "<td>{$centimeters}</td>";
    echo "<td>centimetre(s)</td>";
    echo "</tr>";
    echo "</table>";

?>
   </body>
</html>