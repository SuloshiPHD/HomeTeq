<?php  
/*
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
*/

class Car {
    function Car() {
        $this->modelOfCar = "Audi";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->modelOfCar;

?>  