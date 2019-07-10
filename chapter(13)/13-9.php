<?php
include __DIR__ . '/text.txt';
$s = fopen( "text.txt","r" );
$results = pc_text2html( $s );
function pc_text2html( $s ) {
$s = htmlentities( $s );
$grafs = split( "\n\n",$s );
	for ( $i = 0, $j = count( $grafs ); $i < $j; $i++ ) {
		$grafs[ $i ] = preg_replace( '/((ht|f)tp:\/\/[^\s&]+)/', '<a href="$1">$1</a>', $grafs[ $i ] );
        $grafs[ $i ] = preg_replace( '/[^@\s]+@([-a-z0-9]+\.)+[a-z]{2,}/i', '<a href="mailto:$1">$1</a>', $grafs[ $i ] );
        $grafs[ $i ] = '<p>'. $grafs[ $i ]. '</p>';
	}
return implode( "\n\n", $grafs );
}
?>
