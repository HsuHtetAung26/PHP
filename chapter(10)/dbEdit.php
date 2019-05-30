<?php
$servername = 'localhost';
$username = 'root';
$password = 'pwdpwd';
try {
	$conn = new PDO( "mysql:host=$servername; dbname=testing", $username, $password );
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$sql = "INSERT INTO MyGuests ( firstname, lastname, email ) VALUES ( 'John', 'Doe', 'john@example.com' )";
	$sql = "INSERT INTO MyGuests ( firstname, lastname, email ) VALUES ( 'Tay', 'Tay', 'tay@example.com' )";
	$conn->exec( $sql );
	$last_id = $conn->lastInsertId();
	echo 'New record created successfully. Last inserted ID is: ' . $last_id;
} catch ( PDOException $e ) {
	echo $sql . '<br>' . $e->getMessage();
}
$conn = null;
?>
