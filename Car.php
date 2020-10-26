<?php

class Car

//PROPERTIES OF OBJECT

{
    private $nbWheels;

    private $currentSpeed;

    private $color;

    private $nbSeats;

    private $energy ;

    private $energyLevel;

// METHOD FOR MOVING OBJECT
//cette fonction permet de mettre de mettre des paramètres par défaut à ces propriétés


/*public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }*/


public function start()
    {
        $sentence = "";
        while ($this->currentSpeed = 0){
            $this->currentSpeed++;
            $sentence .= "Inition!";
        }
        $sentence .= "Running";
        return $sentence;

    }

public function forward()
    {
        $this->currentSpeed = 15;

        return "Go!";
    }

public function brake()
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }



// SETTERS AND GETTERS

public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

public function getNbWheels(): int
    {
        return $this->nbWheels;
    }


public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }

public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

public function getColor(): string
    {
        return $this->color;
    }

public function setColor(string $color): void
    {
        $this->color = $color;
    }


public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

public function getNbseats(): int
    {
        return $this->nbSeats;
    }

public function setEnergy(int $energy): void
    {
        $this->energy = $energy;
    }

public function getEnergy(): string
    {
        return $this->energy;
    }

public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $ernergyLevel;
    }

public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }


}

