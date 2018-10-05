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

      <table>
         <tr>
            <th colspan="2">A pint of</th>
         </tr>
         <tr>
         <tr>
            <th colspan="2">plain is your</th>
         </tr>
         <tr>
         <tr>
            <th colspan="2">only man</th>
         </tr>
         <tr>
            <th>Pints</th>
            <th>Ml</th>
         </tr>
         <?php

            // Define the table output variables
            $numberOfPints = $_GET['num_pints'];
            if (!is_numeric($numberOfPints)) {
              echo "The Number of Pints is not a number";
              echo "<br>";
              return;
            }

            $numberOfPintsRounded = round($numberOfPints,1);
            $milliletresPerPint = 568.26125;
            $numberOfMillimetres = round(($numberOfPintsRounded*$milliletresPerPint),1);
            
            
            echo "<td>{$numberOfPintsRounded}</td>";
            echo "<td>{$numberOfMillimetres}</td>";
            
         ?>


      </table>

   </body>
</html>