<?php 

function hello() {
    echo "Hello World!";
};

function init () {
    hello();
    echo "    ";
    calculate();
}

function calculate() {
    echo 555 + 555;
};

init();

function deliver($message) {
    echo $message;
};
deliver("Hello There!    ");

function equation($number1, $number2){
    $sum = $number1 + $number2;
    return $sum;
}
$result = equation(20, 20);
echo $result . "  ";
$result = equation(100, $result);
echo $result;
echo "   ";

//scoop
$x = "outside"; //global scoop
function convert(){
    global $x; //turn it to global scoop
    $x = "inside"; //local scoop
}
echo $x;

echo "    ";

convert();
echo $x;
echo "   ";
//This is a constant variable!
define("NAME", 1000); //first parameter is the name of the constant, second parameter is the value of the constant
echo NAME;
//This is another constant!
const HI = "Hi There!"; //Is better not to use this syntax for resources!
echo "    ";
echo HI;
?>