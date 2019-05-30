<?php
$servername = 'localhost';
$username = 'root';
$password = 'pwdpwd';
$conn = new PDO( "mysql:host=$servername; dbname=testing", $username, $password );
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
$st = $conn->query( "SELECT symbol,planet FROM zodiac" );
foreach ( $st->fetchAll() as $row ) {
	print $row['symbol'] . ' goes with ' . $row['planet'] . '<br/>';
}
?>
