<?php
class car 
{
    
    public $car;

    function __construct($car)
    {
        $this-> name = $car;
    }

    function __destruct()
    {
        echo "Destruct Is Working  {$this-> name} .";

    }

}

$bmw = new car("bmw");

$bmw = new car("volvo");


?>