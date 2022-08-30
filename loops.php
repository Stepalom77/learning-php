<?php 
//While loops
$numberArray = [9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22];
$counter = 0;
while($counter != 22) {
    echo $counter . "   ";
    $counter++;
};

echo "  For Loop!   ";

//For loops

for($i = 0; $i < 10; $i++){
    echo $i . "  ";
};

echo "   Foreach Loop!   ";
//Foreach loops

foreach($numberArray as $number) {
    echo $number . "  ";
};
?>