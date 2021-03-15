<?php
//Praktikum Abstract
abstract class Car{
    #abstract classes can have properties
    protected $tankVolume;

    #abstract classes can have non abstract methods
    public function setTankVolume($volume){
        $this->tankVolume=$volume;
    }

    #abstract method
    abstract public function calcNumMilesOnFullTank();
}
?>