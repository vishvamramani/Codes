<?php

class fruit{

    public $name;
    public $color;

    function set($name)
    {
        $this->name = $name;

    }

    function get()
    {
        return $this-> name;
    }
}

 $apple = new fruit();
 $apple-> set('apple');

 echo "New  ". $apple->get();
?>