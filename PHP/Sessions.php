<?php
session_start();
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
?>

<!DOCTYPE html>
<html>
<body>

<?php

echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

</body>
</html>
