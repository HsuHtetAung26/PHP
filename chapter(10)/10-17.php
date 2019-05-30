<?php
include 'config.php';
$st = $conn->prepare( "SELECT sign FROM zodiac WHERE element LIKE ?" );
$st->execute( array( 'fire' ) );
while ( $row = $st->fetch() ) {
	print $row[ 0 ] . '<br>';
}
$st->execute( array( 'water' ) );
while ( $row = $st->fetch() ) {
	print $row[ 0 ] . '<br>';
}
?>
