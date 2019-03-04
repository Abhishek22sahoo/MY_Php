<?php
//String
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>"; 
echo $y;
echo "<br>";
//Intiger
$x = 5985;
var_dump($x);
echo "<br>";
//Float
$x = 10.365;
var_dump($x);
echo "<br>";
//Array
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";
//Object
class Car {
    function Car() {
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
echo "<br>";
//Null
$x = "Hello world!";
$x = null;
var_dump($x);
?>