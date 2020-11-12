<?php

require_once 'Highway.php';

final class PedestrianWay extends HighWay
{
    public function __construct(int $nbLane = 1, int $maxSpeed = 10)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicule($vehicule)
    {
        $currentVehiclues = [];
        if ($vehicule instanceof Bicycle) {
            $this->currentVehicules[] = array_push($currentVehicules, $vehicule);
        }
    }
}