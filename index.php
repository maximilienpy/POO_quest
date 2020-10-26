<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle();
$cars = new Car();
$bike->setColor("blue");
$bike->setCurrentSpeed(25);

$cars->setCurrentSpeed(5);
$cars->setColor("red");

var_dump($bike);

var_dump($cars);
// Instanciation d'un nouvel objet $rockrider
//$rockrider = new Bicycle();
//$rockrider->color = 'yellow';

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle();
$tornado->color = 'black';

//Instanciation d'un nouvel objet $venturi
$venturi = new Car();
$venturi->setNbSeats(4);
//$venturi->color = 'green';

//Moving bike

//echo $bike->forward();
//echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
//echo $bike->brake();
//echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
//echo $bike->brake();

//Moving car

echo $cars->start();
echo $cars->forward();
echo '<br> Vitesse de la voiture : ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $cars->brake();
echo '<br> Vitesse de la voiture : ' . $cars->getcurrentSpeed() . ' km/h' . '<br>';
echo $cars->brake();

//$tornado->forward();
//var_dump($rockrider);
var_dump($tornado);
//$bike->dump();

//var_dump($cars);
var_dump($venturi);