<?php

class color
{
    public $name;

    function __construct($name) 
    {
        $this->name = $name;
    }
    function get ()
    {
        return $this-> name;
    }
}

$n = new color('Red');
echo $n->get(). '<br>';
$n = new color('Yellow');
echo $n->get(). '<br>';

?>