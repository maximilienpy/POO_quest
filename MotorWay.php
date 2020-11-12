<?php

require_once 'Highway.php';

final class Motorway extends HighWay
{

    public function __construct($nbLane = 4, $maxSpeed = 130)
    {
        $this-> nbLane = $nbLane;
        $this-> maxSpeed = $maxSpeed;
    }

   public function addVehicule($vehicule){
       $currentVehicules = [];
       if ($vehicule instanceof Car) {
           $this->currentVehicules[] = array_push($currentVehicules, $vehicule);
       }
   }

}