<?php

$severname = "localhost";
$username = "root";
$password = "";
$db_name = "mydb";

$conn = new mysqli($severname, $username,$password,$db_name);

if ($conn->connect_error)
{
    die ("Connection Failed :".$conn->error);
}

$sql = "INSERT myguests (firstname,lastname,email)
        VALUES ('Vishvam','Ramani' , 'vishvamramani@gmail.com');";

$sql .= "INSERT myguests (firstname,lastname,email)
        VALUES ('dhruv' ,'Ramoilya','dhruvramoliya@gmail.com'); ";    

$sql .= "INSERT myguests (firstname,lastname,email)
            VALUES ('shyam',ranperiya','shyam@gmail.com')";

    if ($conn->multi_query($sql) === TRUE)
    {
        echo " New Records Upload Successfully";

    }
    else 
    {
        echo "Error". $sql . "<br>". $conn->error;
    }

    $conn->close();
?>