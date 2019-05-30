<?php
include 'config.php';
$row = $conn->query( "SELECT symbol, planet FROM zodiac", PDO::FETCH_BOUND ); 
$symbol = $row->bindColumn( 'symbol', $symbol );
$row->bindColumn( 2, $planet );
while ( $row->fetch() ) {
	print $symbol . ' goes with ' . $planet . '<br>';
}
?>
