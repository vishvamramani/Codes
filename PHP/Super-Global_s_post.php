<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Name: <input type="text" name="input-name">
        <input type="submit">


        <?php 

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST['input-name'];

        if (empty($name))
        {   
            echo '<br>';
            echo "Name is Empty";

        }
        else{
            echo "<br>";
            echo $name;
        }
    }

  

   ?>

    </form>
</body>

</html>