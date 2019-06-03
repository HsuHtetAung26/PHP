<?php
$servername = 'localhost';
$username = 'root';
$password = 'pwdpwd';
$dbname = 'testing';
try {
	$conn = new PDO( "mysql:host=$servername;dbname=$dbname", $username, $password );
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id = 2";
	$stmt = $conn->prepare( $sql );
	$stmt->execute();
	echo $stmt->rowCount() . ' records UPDATED successfully';
} catch ( PDOException $e ) {
	echo $sql . '<br>' . $e->getMessage();
}
$conn = null;
?>
