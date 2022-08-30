<?php 
//Thse are arrays!
$numberList = [10, 20, 30, 40 ,50];
$numbers = array(33, 66, 99, 133);
//Print index of array!
echo $numberList[2];
//Print structure of array! 
echo "     ";
print_r($numbers);
//Replaces index 0 with first_name index.
$names = ["first_name" => "Stephano"];

echo "      ";
print_r($names);
echo "    ";
//Print index first_name
echo $names["first_name"];

?>