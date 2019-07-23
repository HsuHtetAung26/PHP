<?php
$width = 200;
$height = 200;
$image = ImageCreateTrueColor( $width, $height );
$background_color = 0xFFFFFF;
ImageFilledRectangle( $image, 0, 0, 120, 100, $background_color );
$text_color = imagecolorallocate( $image, 0, 0, 255 );
$x = $y = 0;
ImageString( $image, 2, $x, $y, 'I love PHP Cookbook', $text_color );
header( 'Content-type: image/png' );
imagepng( $image );
imagedestroy( $image );
?>
