<?php
$servername = 'localhost';
$username = 'root';
$password = 'pwdpwd';
try {
	$conn = new PDO( "mysql:host=$servername; dbname=testing", $username, $password );
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$sql = "CREATE DATABASE myDBPDO";
	$sql = "CREATE TABLE MyGuests (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		email VARCHAR(50),
		reg_date TIMESTAMP
	)";
	$conn->exec($sql);
	echo 'Database created Successfully';
} catch ( PDOException $e ) {
	echo 'Connection failed:' .$e->getMessage();
}
?>
