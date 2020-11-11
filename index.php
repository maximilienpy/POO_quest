<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bicycle = new Bicycle('blue',1 );
var_dump($bicycle);


$car = new Car('green', 4, 'electric');
var_dump($car);
var_dump(Car::ALLOWED_ENERGIES);







$truck = new Truck(100,'blue',5,'fuel');
// var_dump($truck);
$renault = new Truck(100,'Black',5,'electric');
//var_dump($renault);
$truck->setLoad(90);







//Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle();
$rockrider->color = 'yellow';

// Instanciation d'un nouvel objet $tornado
//$tornado = new Bicycle();
//$tornado->color = 'black';

//Instanciation d'un nouvel objet $venturi
$venturi = new Car();
$venturi->setNbSeats(4);
$venturi->color = 'green';

//Moving bike

//echo $bike->forward();
//echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
//echo $bike->brake();
//echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
//echo $bike->brake();

//Moving car

//echo $car->start();
//echo $car->forward();
//echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
//echo $car->brake();
//echo '<br> Vitesse de la voiture : ' . $car->getcurrentSpeed() . ' km/h' . '<br>';
//echo $car->brake();

//Moving truck

//echo $truck->start();
//echo $truck->forward();
//echo $renault->loading();
//echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
//echo $truck->brake();
//echo '<br> Vitesse du camion: ' . $truck->getcurrentSpeed() . ' km/h' . '<br>';
//echo $truck->brake();

