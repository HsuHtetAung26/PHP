<?php
function ImageFTCenter( $image, $size, $angle, $font, $text, $extrainfo = array() ) {
	$xi = ImageSX( $image );
	$yi = ImageSY( $image );
	$box = ImageFTBBox( $size, $angle, $font, $text, $extrainfo );
	$xr = abs( max( $box[2], $box[4] ) );
	$yr = abs( max( $box[5], $box[7] ) );
	$x = intval( ( $xi - $xr ) / 2 );
	$y = intval( ( $yi + $yr ) / 2 );
return array( $x, $y ); }
?>
