<?php
include 'config.php';
$fields = array( 'symbol','planet','element' );
$update_fields = array();
$update_values = array();
foreach ( $fields as $field ) {
	$update_fields[] = '$field = ?';
	$update_values[] = $_POST[ $field ];
}
$st = $conn->prepare( "UPDATE zodiac SET " . implode( ',', $update_fields ) . 'WHERE sign = ?' );
$st->execute( $update_values );
?>
