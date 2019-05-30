<?php
include 'config.php';
$fields = array( 'symbol','planet','element' );
$update_fields = array();
$update_values = array();
foreach ( $fields as $field ) {
	$update_fields[] = '$field = ?';
}
$st = $conn->prepare( "UPDATE zodiac SET " . implode( ',', $update_fields ) . 'WHERE sign = ?' );
$st->execute( $update_values );
$fields = array( 'symbol','planet','element' );
$placeholders = array();
$values = array();
foreach ( $fields as $field ) {
	$placeholders[] = '?';
}
$st = $db->prepare( "INSERT INTO zodiac ( ' . implode( ',', $fields ) . " ) VALUES ( ' . implode( ',', $placeholders ) . ' )' );
$st->execute( $values );
?>
