<?php
class MotorBite{
    //Properties  or Attribute
    public $brand;
    public $size;
    public $gearType;
    public $color;
    public $price;

    // constructor
    function __construct($brand, $size, $gearType, $color, $price)
    {
        $this->brand = $brand;
        $this->size = $size;
        $this->gearType = $gearType;
        $this->color = $color;
        $this->price = $price; 
    }




    //method or behavior
    public function start(){
        echo "Started...";
    }

    public function speed_up(){
        echo "Speed up...";
    }

    public function stop(){
        echo "Stoped.";
        
    }

    public function getInfo(){
        $output = "<div>
        <p>Brand $this->brand</p>
        <p>Size  $this->size</p>
        <p>Gear  $this->gearType</p>
        <p>Color $this->color</p>
        <p>Price $this->price</p>
        </div><hr>";
        return $output;
    }
}
?>