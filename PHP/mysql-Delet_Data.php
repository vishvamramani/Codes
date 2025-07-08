<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mydb';

$conn = new mysqli( $servername, $username, $password, $dbname );

if ( $conn->connect_error )
 {
    die ( 'Connection Failed'. $conn->connect_error );

}
 
 $sql = 'DELETE FROM MyGuests WHERE id =50';

if ( $conn->query( $sql ) === TRUE ) 
 {
    echo 'Record deleted successfully';
} else {
    echo 'Error deleting record: ' . $conn->error;
}

$conn->close();
?>

