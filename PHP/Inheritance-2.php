<?php
    class car 
    {
      public  $name;
      public  $color;
       

        function Gadi ($name, $color)
        {
            $this-> name = $name;
            $this-> color= $color;
        }

        protected function intro()
        {
            echo "Your Car is {$this->name} And Car Color Is {$this->color}.";
        }
    }

    class abc extends car 
    {
        function message()
        {
            print "Hi Vishvam Ramani";
        }
    }

  
$car = new abc("TATA","Tiyago");
$car->message();
$car->intro();    
?>