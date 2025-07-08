<?php 

    class first{
        const massage= "Thank You 1"."<br>";
        const massage1="Thank You 2"."<br>";
        const massage2="Thank You 3"."<br>";
    }

    echo first::massage; 
    echo first::massage1; 
    echo first::massage2; 

    echo "<br>";    

?>





<?php
 
 class byebye 
 {
    const mass="Hello World!";

    function byebye()
    {
        echo self::mass;
    }
 }

 $bye=new byebye();
 $bye->byebye();
?>
