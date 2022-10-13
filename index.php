<?php


require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';



$truckKun = new Truck(60, 'blue', 3, 'Gasoil');


$truckKun->setCurrentLoad(40);
echo $truckKun->isFull();

$truckKun->unLoad(10);

echo $truckKun->isFull();
