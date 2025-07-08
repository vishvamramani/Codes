<?php
echo "Welcome To Database ";
echo "<br>";

    $servername = "localhost";
    $username= "root";  
    $password = "";
    $name_db="mydb";

    $conn=mysqli_connect($servername,$username,$password,$name_db);
 

if (!$conn)
 {
    die("faild to connect :".mysqli_connect_error());
 }
 else
 {
    echo "Connect Successfull";
 }


 $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
  
    
    $sql = "INSERT INTO MyGuests (firstname,lastname,email) 
    VALUES ('jone Don' ,'doe' ,'qoarkeqwln@gamil.com') ";

    if($conn->query($sql)=== TRUE)
    {
        echo " <br> Data Is insert Successfully";
    }
    else 
    {
        echo "Error". $sql . "<br>". $conn->error;
    }


    $conn->close();
?>