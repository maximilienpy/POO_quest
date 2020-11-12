<?php



// Vehicule.php

abstract class Vehicule
{

    // const ALLOWED_ENERGIES = [
    //     'fuel'
    //     'electric'
    // ];

    /**
     * @var string
     */
    protected $color;

    /**
     * @var integer
     */
    protected $currentSpeed;

    /**
     * @var integer
     */
    protected $nbSeats;

    /**
     * @var integer
     */
    protected $nbWheels;



    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }
    
  

    public function forward(): string
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
    
        public function setNbWheels(int $nbWheels): void
        {
            $this->nbWheels = $nbWheels;
        }

    public function getNbWheels(): int
        {
            return $this->nbWheels;
        }


}