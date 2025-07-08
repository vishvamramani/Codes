<?php

$Cookie_name = 'cccc';
$Cookies_value = 'vishvam';

setcookie( $Cookie_name, $Cookies_value, time()-3600, '/' );

if(!isset($_COOKIE[$Cookie_name])) {
    echo "Cookie named '" . $Cookie_name . "' is not set!";
  } else {
    echo "Cookie '" . $Cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$Cookie_name];
  }
?>




