<?php

$severname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'mydb';

$conn = new mysqli( $severname, $username, $password, $db_name );
if ( $conn->connect_error )
 {
    die ( 'Connection Failed :'.$conn->error );

}
$sql = 'SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname';
$result = $conn->query( $sql );

if ( $result->num_rows >0 )
 {
    while ( $row = $result->fetch_assoc() )
 {
        echo '<br>'.'id = '. $row[ 'id' ] . '___Name = ' . $row[ 'firstname' ]. '___lastname = '. $row[ 'lastname' ];
    }
} else {
    echo '0 results';
}

$conn->close();

?>