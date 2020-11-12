<?php

require_once 'Highway.php';

final class PedestrianWay extends HighWay
{
    public function __construct(int $nbLane = 2, int $maxSpeed = 50)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicule($vehicule){
        $currentVehicules = [];
        if($vehicule instanceof Truck){
            $this->currentVehicules[]= array_push($currentVehicules, $vehicule);

        }
    }


}
