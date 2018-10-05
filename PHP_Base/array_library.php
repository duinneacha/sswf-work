<?php



function sayHello() {
   echo "<br>";
   echo "Hello to you!!";
   echo "<br>";
}


function get_distinct($a) {
   print_r($a);
   $distinct_array = array();

   for ($outerLoopCounter = 0; $outerLoopCounter<count($a); $outerLoopCounter++) {
      echo $a[$outerLoopCounter];

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
   echo "<br>";
   print_r($distinct_array);
}

?>