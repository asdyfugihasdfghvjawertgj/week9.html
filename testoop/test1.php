<?php
class Car{
	//property
	public $model="2000";
	public $color;
	public $speed;

function say(){
	echo "hello";
}

}
$bmw=new Car();//create onject
$bmw->say();//call method
echo $bmw->model;
$bmw->color="black";
echo $bmw->color;
?>