<?php

$severname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'mydb';

$conn = new mysqli( $severname, $username, $password, $db_name );

if ( $conn->error )
 {
    die ( 'Connection  Failed '.$conn->connect_error );
}

$stmt = $conn->prepare( 'INSERT INTO myguests (firstname, lastname, email) VALUES (?,?,?)' );
$stmt->bind_param( 'sss', $firstname, $lastname, $email );

$firstname = 'John';
$lastname = 'Doe';
$email = 'john@example.com';
$stmt->execute();

$firstname = 'Mary';
$lastname = 'Moe';
$email = 'mary@example.com';
$stmt->execute();

$firstname = 'Julie';
$lastname = 'Dooley';
$email = 'julie@example.com';
$stmt->execute();

echo 'New records created successfully!';

$stmt->close();
$conn->close();
?>