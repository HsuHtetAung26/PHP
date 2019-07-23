<?php
$width = 200;
$height = 200;
$image = ImageCreateTrueColor( $width, $height );
$background_color = 0xFFFFFF; 
ImageFilledRectangle( $image, 0, 0, $width - 1, $height - 1, $background_color );
$x1 = $y1 = 0; 
$x2 = $y2 = $height - 1;
ImageLine( $image, $x1, $y1, $x2, $y2, 0xFF00FF  );
header( 'Content-type: image/png' );
ImagePNG( $image );
ImageDestroy( $image );
?>