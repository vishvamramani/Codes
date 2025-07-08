<?php

    $file= fopen("file.txt","w") or die ("Unable to open file!");

    echo fwrite($file,filesize("file.txt"));
    fwrite($file,'100200300400500600700800900');

    
    $file= fopen("file.txt","r") or die ("Unable to open file!");

    echo fread($file,filesize("file.txt"));
   

    fclose($file);


   


?>