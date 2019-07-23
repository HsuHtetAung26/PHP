<?php
$width = 500;
$height = 100;
$image = ImageCreateTrueColor( $width, $height );
$background_color = 0xFFFFFF; 
ImageFilledRectangle( $image, 0, 0, $width - 1, $height - 1, $background_color );
$x1 = $y1 = 0 ; 
$x2 = $y2 = $height - 1; 
ImageLine( $image, $x1, $y1, $x2, $y2, 0xFF0000 );
ImageRectangle( $image, 50, 10, 100, 20, 0xFF00FF );
ImageFilledRectangle( $image, 150, 10, 300, 50, 0xFF00FF  );
$points = array( 350, 10, 300, 60, 400, 100 );
ImagePolygon( $image, $points, count( $points ) / 2, 0xFF00FF );
$points = array( 400, 10, 500, 60, 400, 100 );
ImageFilledPolygon( $image, $points, count( $points ) / 2, 0x0000FF );
header( 'Content-type: image/png' );
ImagePNG( $image );
ImageDestroy( $image );
?>
