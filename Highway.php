<?php

require_once 'Vehicule.php';

abstract class HighWay 
{

    //Variables of Highway

    protected $currentVehicules;

    protected $nbLane;

    protected $maxspeed;


    // Funtion of Highway
    
    public function __construct(int $nbLane = 4, int $maxspeed = 130)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }
  
    public function addVehicule($vehicule){
        $currentVehicules = [];
        if($vehicule instanceof Car){
            $this->currentVehicules[] = array_push($currentVehicules, $vehicule);
        }





    //Getters and Setters

    public function setCurrentVehicules(array $currentVehicules): array {

        $this->currentVehicules = $currentVehicules;
    }

    public function getCurrentVehicules(): int{

        return $currentVehicules;
    }

    public function setNbLane(int $nbLane): void{

        $this->nbLane = $nbLane;
    }

    public function getNbLane(): int{

        return $nbLane;
    }

    public function setMaxSpeed(int $maxspeed): void{

        $this->maxspeed = $maxspeed;
    }

    public function getMaxSpeed(): int{

        return $maxspeed;
    }
    




}
