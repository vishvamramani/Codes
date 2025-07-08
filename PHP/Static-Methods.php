<?php
 class greeting 
 {
        static function abstract()
        {
            echo "Hello World!";
        }

        function __construct()
        {
            self::abstract();
        }
 }

new greeting();
?>