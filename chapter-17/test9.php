<?php
$im = ImageCreateTrueColor( 200, 200 );
$background = 0xFFFFFF;
ImageFilledRectangle( $im, 0, 0, 199, 199, $background );
$text_color = 0x000000;
ImageStringUp( $im, 1, 100, 150, 'I love PHP Cookbook', $text_color );
header( 'Content-type: image/png' );
imagepng( $im );
imagedestroy( $im );
?>
