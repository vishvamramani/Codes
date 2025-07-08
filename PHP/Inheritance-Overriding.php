<?php
 class car 
 {
    public $name;
    public $color;


    function ab ($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function intro ()
    {
        echo "your car is {$this->name} And Car color is {$this->color}.";
    }
 }

 class Gadi extends car
 {
    public $weight;

    function  __construct($name, $color, $weight)
    {
        $this->name=$name;
        $this->color=$color;
        $this->weight=$weight;
       
    }

    function intro()
    {
        echo "Your Car Name is {$this->name} Color Is {$this->color} and weight {$this->weight}. ";
    }
 }

$car= new gadi("BMW","Black","1000 Kg");
$car->intro();

?> 