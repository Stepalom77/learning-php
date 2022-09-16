<?php 
class Car {
    public $wheels = 4;//can be used anywhere
    protected $hood = 1;//can only used inside this class and all it's  subclasses
    private $engine = 1;//can only be used in this class
    static $radio = 2; //can only be use inside the class
    var $doors = 4;
    function __construct()
    {
       echo $this->wheels = 10;
    }
    function MoveWheels(){
        echo "Wheels move";
    }
    function DefineWheels(){
        $this->wheels = 10;
    }
    function DefineDoors(){
        $this->doors = 5;
    }
    function DefineEngine(){
        echo $this->engine;
    }
}
//Class inheritance
class Plane extends Car {
    static $wings = 4;
    static function DefineBrand(){
        Plane::$wings = 6;   
    }
}

Plane::DefineBrand();
echo Plane::$wings;
echo "  ";
$bmw = new Car;
echo "  ";
echo Car::$radio; //how to call static variables
/*
$bmw = new Car();
echo "   ";
echo $bmw->wheels;
echo "    ";
echo $bmw->DefineEngine();
echo "   ";
$semi = new Semi();

class Semi extends Car {
    function showProperty(){
        echo $this->hood;
    }
}

echo "   ";
echo $semi->showProperty();

echo "   ";
*/
/*
$jet = new Plane();
$jet->DefineWheels();
echo $jet->wheels;
echo "    ";
$mercedez_bez = new Car();
$bmw->MoveWheels();
echo "    ";
echo "    ";
$bmw->wheels = 8;
echo "    ";
echo $bmw->wheels;
echo "    ";
$bmw->DefineWheels();
echo $bmw->wheels;
echo "    ";
echo $mercedez_bez->wheels = 6;
echo "    ";
$mercedez_bez->DefineDoors();
echo $mercedez_bez->doors;
echo "    ";
if(class_exists("Car", "MoveWheels")) {
    echo "The Method Exists!";
}*/
?>