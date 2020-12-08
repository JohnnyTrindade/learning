<?php

require_once("Vehicle.php");

class Motorcycle extends Vehicle{
    function __construct($brand = null, $color = null){
        parent::__construct($brand, strtoupper($color));
    }
}