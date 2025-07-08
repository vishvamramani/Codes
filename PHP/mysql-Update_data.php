<?php
$severname = 'localhost';
$username = 'root';
$passworld = '';
$db_name = 'mydb';

$conn = new mysqli( $severname, $username, $passworld, $db_name );

if ( $conn->connect_error )
 {
    die ( 'Connection Failed'.$conn->connect_error );
}

$sql = "UPDATE MyGuests SET email='Ddddddddoe' WHERE id=10";

if ( $conn->query( $sql ) === TRUE ) {
    echo 'Record updated successfully';
} else {
    echo 'Error updating record: ' . $conn->error;
}

$conn->close();

?>