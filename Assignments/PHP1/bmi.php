<?php

$weight = $_GET['weight'];
$height = $_GET['height'];

if (!is_numeric($weight)) {
  echo "The Weight entered is not a number";
  echo "<br>";
  return;
}


if (!is_numeric($height)) {
  echo "The Height entered is not a number";
  echo "<br>";
  return;
}

$idealBMI = 21.75;

$BMICalculation = round(($weight / ($height*$height)),2);

$idealWeight = $idealBMI * ($height * $height);

echo "<br>";
echo "BMI is {$BMICalculation}";
echo "<br>";
echo "Ideal Weight is {$idealWeight}";

// Find the BMI Category - Ambiguity addressed in table with >=
echo "<br>";
if ($BMICalculation < 15) {
  echo "BMI Category is:- Very severely underweight";
} else if ($BMICalculation >= 15 && $BMICalculation < 16) {
  echo "BMI Category is:- Severely underweight";
} else if ($BMICalculation >= 16 && $BMICalculation < 18.5) {
  echo "BMI Category is:- Underweight";
} else if ($BMICalculation >= 18.5 && $BMICalculation < 25) {
  echo "BMI Category is:- Normal (healthy weight)";
} else if ($BMICalculation >= 25 && $BMICalculation < 30) {
  echo "BMI Category is:- Overweight";
} else if ($BMICalculation >= 30 && $BMICalculation < 35) {
  echo "BMI Category is:- Obese Class I (Moderately Obese)";
} else if ($BMICalculation >= 35 && $BMICalculation < 40) {
  echo "BMI Category is:- Obese Class II (Severely Obese)";
} else if ($BMICalculation >= 40 && $BMICalculation < 45) {
  echo "BMI Category is:- Obese Class III (Very severely Obese)";
} else if ($BMICalculation >= 45 && $BMICalculation < 50) {
  echo "BMI Category is:- Obese Class IV (Morbidly Obese)";
} else if ($BMICalculation >= 50 && $BMICalculation < 60) {
  echo "BMI Category is:- Obese Class V (Super Obese)";
} else if ($BMICalculation >= 60) {
  echo "BMI Category is:- Obese Class VI (Hyper Obese)";
} else {  
  echo "Not Classified";
}


?>