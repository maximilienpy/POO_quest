<?php

require_once 'Vehicule.php';

class Truck extends Vehicule
{

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];

    private $stockCapacity;

    private $load;

    protected $energy;

    protected $energyLevel;

    public function __construct(int $stockCapacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);//this is the construct herited from Vehicule
        $this->setStockCapacity($stockCapacity);
        // $this->setEnergyLevel($energyLevel);
        $this->setEnergy($energy);

    }

    public function start(): string
    {
        return 'Engine ignition';
    }


    //loading function


    // public function loading(): string
    // {
    //     if ($this->load >= $this->stockCapacity)
    //     {
    //         $sentence = "The truck is full";
    //     } else {
    //         $sentence = "The truck is not full";
    //     }
    //     return $sentence;
    // }
    

    public function loading(): string
    {
        if($this->stockCapacity > $this->load)
        {
            $sentence = 'truck is not full';
        }
        else {
            $sentence = "truck is full";
        }
        return $sentence;
    }


    //Getters and Setters


   
  

    
    public function setStockCapacity(int $stockCapacity): void
     {
         $this->stockCapacity = $stockCapacity;
     }

    
    public function getLoad(): int
    {
        return $this->load;
    }


    public function setLoad(int $load): void
    {
        $this->load = $load;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    
}







