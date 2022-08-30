<?php 
//Math functions
echo pow(2, 7); // 2 ^ 7 2 to the seventh power
echo "   ";
echo rand(1, 500); //return random number first parameter is the min limit and the second parameter is the max limit
echo "<br>";
echo sqrt(100); //square of parameter number;
echo "<br>";
echo ceil(4.6); //return the biggest integer
echo "<br>";
echo floor(4.6); //return the smallest integers
echo "<br>";
echo round(4.7); //rounds floor number to the value of the decimal number

//String functions
echo "<br>";
$string = "Hello World!";
echo strlen($string); //Returns length of string
echo "<br>";
echo strtoupper($string); //Return string to upper case
echo "<br>";
echo strtolower($string); //Return string to lower case

//Array Functions
$array = [18, 12, 13, 14, 15, 16];
echo "<br>";
echo max($array); //Returns max element of array
echo "<br>";
echo min($array); // Returns min element of array
echo "<br>";
echo $array[0];
echo "<br>";
sort($array);
echo $array[0];
?>