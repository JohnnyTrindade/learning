<?php

require_once ("IVehicle.php");

abstract class Vehicle implements IVehicle {
    public $brand;
    protected $color;
    public $engine;

    function __construct($brand = null, $color = null){
        $this->brand = $brand;
        $this->color = $color;
    }


    public function getEngine($type = "horsepower"){
        return "{$this->engine} {$type}";
    }

    public function getBrand($type = "Car"){
        return "{$type}  {$this->brand}";
    }

    public function getColor($type = "Color"){
        return "{$type} {$this->color}";
    }
}