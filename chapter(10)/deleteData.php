<?php
$servername = 'localhost';
$username = 'root';
$password = 'pwdpwd';
$dbname = 'testing';
try {
	$conn = new PDO( "mysql:host=$servername;dbname=$dbname", $username, $password );
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$sql = "DELETE FROM MyGuests WHERE id=4";
	$conn->exec( $sql );
	echo 'Record deleted successfully';
} catch ( PDOException $e ) {
	echo $sql . '<br>' . $e->getMessage();
}
$conn = null;
?>
