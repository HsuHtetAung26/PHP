<?php
$w = 400;
$h = 75;
$image = ImageCreateTrueColor( $w, $h );
ImageFilledRectangle( $image, 0, 0, $w - 1, $h - 1, 0xFFFFFF );
$color = 0x000000; 
$text = 'Pack my box with five dozen liquor jugs.';
$x = 0;
for( $font = 1, $y = 5; $font <= 5; $font++, $y += 20 ) {
	list( $x ) = ImageStringCenter( $image, $text, $font );
	ImageString( $image, $font, $x, $y, $text, $color );
}
header( 'Content-type: image/png' );
imagepng( $image );
imagedestroy( $image );
?>
