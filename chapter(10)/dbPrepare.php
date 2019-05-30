<?php
$servername = 'localhost';
$username = 'root';
$password = 'pwdpwd';
try {
	$conn = new PDO( "mysql:host=$servername; dbname=testing", $username, $password );
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$stmt = $conn->prepare( "INSERT INTO MyGuests ( firstname, lastname, email ) VALUES ( :firstname, :lastname, :email )" );
	$stmt->bindParam( ':firstname', $firstname );
	$stmt->bindParam( ':lastname', $lastname );
	$stmt->bindParam( ':email', $email );
	$firstname = 'Hsu';
	$lastname = 'Htet';
	$email = 'hsu@example.com';
	$stmt->execute();
	$firstname = 'Myat';
	$lastname = 'Hsu';
	$email = 'myat@example.com';
	$stmt->execute();
	$firstname = 'Seint';
	$lastname = 'Nandar';
	$email = 'seint@example.com';
	$stmt->execute();
	echo 'New records created successfully';
} catch ( PDOException $e ) {
	echo 'Error: ' . $e->getMessage();
}
$conn = null;
?>
