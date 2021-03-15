<?php
// The parent class
//Praktikum Private
class Car {
	//The $model property is private, thus it can be accessed
	// only from inside the class
	private $model;
	//Public setter method
	public function setModel ($model)
	{
		$this -> model = $model;
	}
}
// The child class
class SportsCar extends Car{
	//Tries to get a private property that belongs to the parent
	public function hello()
	{
		return "beep! I am <i>" . $this ->model . "</i><br />";
	}
}
//Create an instance from the child class
$sportsCarl = new SportsCar();
//Set the class model name
$sportsCarl -> setModel ('Mercedes Benz');
?>