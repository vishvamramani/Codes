<?php

 class car
 {
    public $name;
    public $color;


    function  __construct ($name , $color)
    {
        $this->name= $name;
        $this->color= $color;
    }

    function intro()
    {
            echo  " <h3>Your Car Name Is {$this->name}  And Color Is {$this->color}. ";
    }

 }

 class gadi extends car     
 {
    function message()
    {
        echo "<h3>Hi Vishvam Ramani";
    }
 }

 $gadi = new gadi("BMW","Red");
 $gadi->message();
 $gadi->intro();
?>