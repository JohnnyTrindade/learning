<?php

interface IVehicle{
    public function getEngine($type = "horsepower");
    public function getBrand($type = "Car");
    public function getColor($type = "Color");
}