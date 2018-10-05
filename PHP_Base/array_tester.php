<?php
require_once('array_library.php');

sayHello();


echo "<br>";
echo "get_distinct()";
echo "<br>";
$array1 = array(2,3,1,2,1,4);
$newDistinctArray = get_distinct($array1);
print_r($array1);
echo "<br>";
print_r($newDistinctArray);
echo "<br>";



echo "<br>";
echo "get_flipped()";
echo "<br>";

$associateArray = array("a" => "x", "c" => "y", "b" => "z", "d" => "y");
$flippedAssociateArray = get_flip($associateArray);

print_r($associateArray);
echo "<br>";
print_r($flippedAssociateArray);

echo "<br>";
echo "<br>";
echo "get_frequencies()";
echo "<br>";

$freqArray = get_frequencies($associateArray);
print_r($associateArray);
echo "<br>";
print_r($freqArray);



?>