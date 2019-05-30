<?php
$servername = 'localhost';
$username = 'root';
$password = 'pwdpwd';
$dbname = 'testing';
$conn = new PDO( "mysql:host=$servername; dbname=$dbname", $username, $password );
$st = $dbname->query( "SELECT symbol, planet FROM zodiac" );
foreach ( $st->fetchAll() as $row ) {
	print $row['symbol'] . ' goes with ' . $row['planet'] . '<br>';
}
?>
