<?php



function sayHello() {
   echo "<br>";
   echo "Hello to you!!";
   echo "<br>";
}

// Takes in an array and returns a unique version by removing the duplicates
function get_distinct($a) {
   $distinct_array = array();

   for ($outerLoopCounter = 0; $outerLoopCounter<count($a); $outerLoopCounter++) {

      $inArray = false;
      for ($innerLoopCounter=0; $innerLoopCounter<count($distinct_array); $innerLoopCounter++) {
         if ($a[$outerLoopCounter] == $distinct_array[$innerLoopCounter]) {
            $inArray = true;
         }
      }
      if (!$inArray) {
         array_push($distinct_array, $a[$outerLoopCounter]);
      }
   }
   return $distinct_array;
}

// Takes in an Associate Array and reverses the Values with the Keys - checking to use only the first instance of a value as the new key
function get_flip($asscArr) {
  
  $flippedArray = array();
  foreach($asscArr as $masterKey=>$masterValue) {
    $keyFound = false;
    foreach($flippedArray as $newKey=>$newValue) {
      if ($masterValue == $newKey) {
        $keyFound = true;
      }
    }
    if (!$keyFound) {
      $flippedArray[$masterValue] = $masterKey;
    }
  }
  return $flippedArray;
}

// Takes in array and returns the frequency count of the values therein
function get_frequencies($a) {
  $frequencyArray = array();
  foreach($a as $masterKey=>$masterValue) {
    $keyFound = false;
    foreach($frequencyArray as $newKey=>$newValue) {
      if ($masterValue == $newKey) {
        $keyFound = true;
        $frequencyArray[$newKey]++;
      }
    }
    if (!$keyFound) {
      $frequencyArray[$masterValue] = 1;
    }
  }
  return $frequencyArray;
}

?>