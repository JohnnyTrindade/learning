<?php

require_once ("Vehicle.php");

class Car extends Vehicle {
    private $doors;

    public function setDoors($doors){
        return $this->doors = $doors;
    }

    public function getDoors(){
        return $this->doors;
    }
}
