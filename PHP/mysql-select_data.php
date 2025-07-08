<?php

$severname = 'localhost';
$username =  'root';
$passworld = '';
$db_name = 'mydb';

$conn = new mysqli( $severname, $username, $passworld, $db_name );

if ( $conn->connect_error )
 {
    die( 'Connection Error '. $conn->connect_error );

}

$sql = 'SELECT id, firstname, lastname FROM MyGuests  ';
$result = $conn->query( $sql );

if ( $result->num_rows > 0 )
 {
    while ( $row = $result->fetch_assoc() )
 {
        echo '<br> id = '. $row[ 'id' ]. ' - Name: '. $row[ 'firstname' ].    ''. 'LastName =  ' .$row[ 'lastname' ];

    }
} else {
    echo '0 results';
}

$conn->close();

?>