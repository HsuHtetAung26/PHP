<?php
$servername = 'localhost';
$username = 'root';
$password = 'pwdpwd';
$conn = new PDO( "mysql:host=$servername; dbname=testing", $username, $password );
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
$rows = $conn->query( "SELECT symbol, planet FROM zodiac ORDER BY planet" );
$firstRow = $rows->fetch();
print 'The first results are that ' . $firstRow['symbol'] . ' goes with ' . $firstRow['planet'];
?>
