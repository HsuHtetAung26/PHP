<?php
include 'config.php';
$st = $conn->query( 'SELECT symbol, planet FROM zodiac' );
$all= $st->fetchAll( PDO::FETCH_COLUMN, 1 );
print 'Retrieved ' . count( $all ) . ' rows';
?>
