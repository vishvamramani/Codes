<?php
    class pi
    {
        public static $value= 3.14;
        function staticvalue()
        {
            return self::$value;
        }
    }

    $pi=new pi();
    echo $pi->staticvalue();


    $value=21;
    
?>