<?php
$size = 100;
$image = ImageCreateTrueColor( $size, $size );
$background_color = 0xFFFFFF; 
ImageFilledRectangle( $image, 0, 0, $size - 1, $size - 1, $background_color );
$black = 0x000000;
ImageEllipse( $image, $size / 2, $size / 2, $size - 1, $size - 1, $black );
ImageFilledEllipse( $image, $size / 2, $size / 2, $size - 1, $size - 1, $black );
header( 'Content-type: image/png' );
ImagePNG( $image );
ImageDestroy( $image );
?>
