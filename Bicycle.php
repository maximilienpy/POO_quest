 <?php



  class Bicycle
  {
      public $color;

      public $currentSpeed;
     
      public $nbSeats = 1;
      
      public $nbWheels = 2;


      /**
     *return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
    
    /**
    *param string $color
    */
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    
    /**
    *param string $color
    */
    public function setCurrentSpeed(int $currentSpeed) : void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }
    
      public function forward(): string
      {
          $this->currentSpeed = 15;
  
          return "Go !";
      }

      public function brake(): string
      {
          $sentence = "";
          while ($this->currentSpeed > 0) {
              $this->currentSpeed--;
              $sentence .= "Brake !!!";
          }
          $sentence .= "I'm stopped !";
          return $sentence;
      }

      public function dump()
      {
          var_dump($this);
      }

      

  }