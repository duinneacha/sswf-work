<?php

if(isset($_GET['animals'])){
  $animalsChecked = $_GET['animals'];
  $animalsSelected = true;
}else{
  $animalsChecked = "";
  $animalsSelected = false;
}

function oldMacLine() {
  echo "Old Macdonald had a farm ee-eye, ee-eye-oh.";
  echo "<br>";
}
function singTheSongWith($animal, $sound) {
  
  $singular = "a";
  if ($sound == "oink") {
    $singular = "an";
  }
  oldMacLine();
  echo "And on that from he had a {$animal} ee-eye, ee-eye-oh.";
  echo "<br>";
  echo "With {$singular} {$sound}, {$sound} here and {$singular} {$sound}, {$sound} there.";
  echo "<br>";
  echo "Here {$singular} {$sound}, there {$singular} {$sound}, everywhere {$singular} {$sound} {$sound}.";
  echo "<br>";
}

function singTheRepeatPart($sound) {
  $singular = "a";
  if ($sound == "oink") {
    $singular = "an";
  }
  echo "With {$singular} {$sound}, {$sound} here and {$singular} {$sound}, {$sound} there.";
  echo "<br>";
  echo "Here {$singular} {$sound}, there {$singular} {$sound}, everywhere {$singular} {$sound} {$sound}.";
  echo "<br>";
}

$animal_sounds = array('duck' => 'quack', 'cow' => 'moo', 'dog' => 'ruff', 'pig' => 'oink', 'badger' => 'growl');

$animalsString = "";
$soundArray = array();
if ($animalsSelected) {
   for($loopCounter=0; $loopCounter < count($animalsChecked); $loopCounter++){
      if ($animalsChecked[$loopCounter] == "duck") {
        $animalsString .= 'duck,';
        array_push($soundArray,$animal_sounds['duck']);
      } else if ($animalsChecked[$loopCounter] == "cow") {
        $animalsString .= 'cow,';
        array_push($soundArray,$animal_sounds['cow']);
      } else if ($animalsChecked[$loopCounter] == "dog") {
          $animalsString .= 'dog,';
          array_push($soundArray,$animal_sounds['dog']);
      } else if ($animalsChecked[$loopCounter] == "pig") {
          $animalsString .= 'pig,';
          array_push($soundArray,$animal_sounds['pig']);
      } else if ($animalsChecked[$loopCounter] == "badger") {
          $animalsString .= 'badger';
          array_push($soundArray,$animal_sounds['badger']);

     }
  }
} else {
  echo "Please enter some animals - I want to sing the song!!!";
  return;
}

$trimmedAnimalsString = rtrim($animalsString,',');
$animalArray = explode(',',$trimmedAnimalsString);


for ($outerLoop = 0; $outerLoop < count($animalArray); $outerLoop++) {
  echo "<br>";
  singTheSongWith($animalArray[$outerLoop], $soundArray[$outerLoop]);
  if ($outerLoop > 0) {
    for ($innerLoop = $outerLoop-1; $innerLoop >= 0; $innerLoop--) {
      singTheRepeatPart($soundArray[$innerLoop]);
    }
  }
  oldMacLine();
}


?>