<?php
interface Car{
    public function setModel($name);

    public function getModel();
}
class miniCar implements Car{
    private $model;

    public function setModel($name){
        $this->model=$name;
    }

    public function getModel(){
        return $this->model;
    }
}
$multi_purpose_vehicle = new miniCar();
$sedan = new miniCar();
$hatchback = new miniCar();

$multi_purpose_vehicle->setModel('Multi-purpose Vehicle');
$sedan->setModel('Sedan');
$hatchback->setModel('Hatchback');

echo $multi_purpose_vehicle->getModel();
echo $sedan->getModel();
echo $hatchback->getModel();
?>