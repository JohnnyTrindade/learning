<?php

require_once ("Car.php");
require_once ("Motorcycle.php");

$ferrari = new Car("Ferrari", "Blue");
//$ferrari->brand = "Ferrari";
//$ferrari->color = "Red";
$ferrari->engine = "800";
$ferrari->setDoors(4);


$mustang = new Car("Mustang", "Yellow");
//$mustang->brand = "Mustang";
//$mustang->color = "Yellow";
$mustang->engine = "500";
$mustang->setDoors(2);

$BMW = new Motorcycle("BMW", "Black");
//$BMW->brand = "BMW";
//$BMW->color = "Black";
$BMW->engine = "600cc";

//echo $ferrari->brand;



echo $mustang->getBrand("Brand");
echo "<br>";
echo $mustang->getColor("Col");
echo "<br>";
echo $mustang->getEngine("HP");
echo "<br>";
echo $mustang->getDoors();

echo "<br>";

echo $ferrari->getBrand();
echo "<br>";
echo $ferrari->getColor();
echo "<br>";
echo $ferrari->getEngine();
echo "<br>";
echo $ferrari->getDoors();

echo "<br>";

echo $BMW->getBrand("Bike");
echo "<br>";
echo $BMW->getColor();
echo "<br>";
echo $BMW->getEngine("Power");