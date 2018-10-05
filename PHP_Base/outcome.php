<?php


$examResult = $_GET['exam'];
$contResult = $_GET['cont'];
$projResult = $_GET['proj'];

if (!is_numeric($examResult)) {
  echo "Please enter a number representing your Exam Result";
  return;
}

if (!is_numeric($contResult)) {
  echo "Please enter a number representing your Continous Assessment Result";
  return;
}
if (!is_numeric($projResult)) {
  echo "Please enter a number for your Project Result";
  return;
}


if ($examResult < 0 || $contResult < 0 || $projResult < 0 || $examResult > 100 || $contResult > 100 || $projResult > 100) {
  echo "Please enter a valid percentage score for the results";
  return;
}

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
         /* margin-left : auto;
         margin-right : auto; */
         border : solid 1px black;
         border-collapse: collapse;
      }

      caption
      {
         text-align : center;
         color : white;
         background-color : black;
      }


      th, td
      {
         border : solid 1px black;
         /* text-align : center; */
      }
   </style>
  <title>Exam Results</title>
</head>
<body>


<?php

  $examFlag = "";
  $contFlag = "";
  $projFlag = "";
  $passMark = "";
  $failMark = "";
  $contRedo = "";
  $projRedo = "";

  if ($examResult >= 40 && $contResult >= 40 && $projResult >= 40) {
    $passMark = "x";
  }

  if ($examResult >= 40) {
    $passFlag = "Y";
  } else {
    $passFlag = "N";
    $failMark = "x";
  }
  
  if ($contResult >= 40) {
    $contFlag = "Y";
  } else {
    $contFlag = "N";
    $contRedo = "x";
  }
  if ($projResult >= 40) {
    $projFlag = "Y";
  } else {
    $projFlag = "N";
    $projRedo = "x";
  }

  echo "<table>";
  echo "<tr>";
  echo "<th>Exams >= 40%</th>";
  echo "<td>{$passFlag}</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th>Cont. ass. >= 40%</th>";
  echo "<td>{$contFlag}</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th>Project >= 40%</th>";
  echo "<td>{$projFlag}</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th>Pass</th>";
  echo "<td>{$passMark}</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th>Resubmit cont. ass.</th>";
  echo "<td>{$contRedo}</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th>Re-do project</th>";
  echo "<td>{$projRedo}</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th>Fail</th>";
  echo "<td>{$failMark}</td>";
  echo "</tr>";
  
  echo "</table>";


?>

</body>
</html>