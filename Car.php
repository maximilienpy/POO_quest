<?php

require_once 'Vehicule.php';

class Car extends Vehicule

{

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    protected $energy;

    protected $energyLevel;

public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }



    public function start(): string
    {
        return 'Engine ignition';
    }

// SETTERS AND GETTERS


public function getEnergy(): string
    {
        return $this->energy;
    }

public function setEnergy(string $energy)
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $ernergyLevel;
    }

}

