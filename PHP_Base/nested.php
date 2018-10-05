<?php
echo "<body>";

echo "&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."Square";
echo "<br>";
echo "<br>";

for ($loopA=1; $loopA<=5; $loopA++) {
   for ($loopB=1; $loopB<=5; $loopB++) {
      echo $loopB." ";
   }
   echo "<br>";
}

echo "<br>";
echo "&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."Triangle 1";
echo "<br>";
echo "<br>";
for ($loopA=1; $loopA<=5; $loopA++) {
   for ($loopB=1; $loopB<=$loopA; $loopB++) {
      echo $loopB." ";
   }
   echo "<br>";
}

echo "<br>";
echo "&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".'Triangle 2';
echo "<br>";
echo "<br>";
for ($loopA=1; $loopA<=5; $loopA++) {
   for ($loopB=$loopA; $loopB<=5; $loopB++) {
      echo $loopB." ";
   }
   echo "<br>";
}

echo "</body>";
?>