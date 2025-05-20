<?php
class Car{
    // these are the properties of the class
    public $brand;
    public $color;
    // assigining the methods


    // fucntion is always public
    function set_brand(){
        echo "Brand is set  <br>";
    }

    function printName(){
        echo $this->brand . " is the brand of the car <br>";
    }
}

$firstCar = new Car(); // creating an object of the class
$firstCar->brand = "BMW"; // accessing the properties of the class
$firstCar->color = "Black"; // accessing the properties of the class
$firstCar->printName();

$secondCar = new Car(); // creating an object of the class
$secondCar->brand = "Mercedes"; // accessing the properties of the class
$secondCar->color = "White"; // accessing the properties of the class
$secondCar->printName();
?>


<!-- * Inheritance
* Inheritance is a mechanism in OOP that allows a class to inherit properties and methods from another class.
* This allows for code reusability and the creation of a hierarchical relationship between classes.
* Inheritance is a fundamental concept in OOP that allows a class to inherit properties and methods from another class.
* This allows for code reusability and the creation of a hierarchical relationship between classes.


* class means blueprint of the object
* class is a collection of properties and methods that define the behavior of an object.
* class is a blueprint for creating objects.
* class is a template for creating objects.
* class is a collection of properties and methods that define the behavior of an object.
* class is a blueprint for creating objects.
* class is a template for creating objects.

-->