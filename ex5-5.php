<?php
/**
 * Accept decimal red, green and blue arguments and returns hexadecimal color values.
 * @param int $red
 * @param int $green
 * @param int $blue
 *
 */
function web_color1( $red, $green, $blue ) { 
	$hex = [ dechex( $red ), dechex( $green ), dechex( $blue ) ];
	foreach ( $hex as $i => $val ) {
		if ( strlen( $i ) == 1 ) {
			$hex[ $i ] = "0$val";
		}
	}
	return '#' . implode( '', $hex );
	
}
print web_color1( 255, 0, 255 );
?>
