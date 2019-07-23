<?php
$image = ImageCreateFromJPEG( __DIR__ . '/iguana.jpg' );
$w = 400;
$h = 75;
$stamp = ImageCreateTrueColor( $w, $h );
ImageFilledRectangle( $stamp, 0, 0, $w - 1, $h - 1, 0xFFFFFF );
$color = 0x000000; 
ImageString( $stamp, 4, 10, 10, 'Galapagos Land Iguana by Nicolas de Camaret', $color );
ImageString( $stamp, 4, 10, 28, 'http://flic.kr/ndecam/6215259398', $color );
ImageString( $stamp, 2, 10, 46, 'Licence at http://creativecommons.org/licenses/by/2.0.', $color );
$margin = ['right' => 10, 'bottom' => 10];  
$opacity = 50; 
ImageCopyMerge( $image, $stamp, imagesx( $image ) - imagesx( $stamp ) - $margin['right'], imagesy( $image ) - imagesy( $stamp ) - $margin['bottom'], 0, 0, imagesx( $stamp ), imagesy( $stamp ), $opacity );
header( 'Content-type: image/png' );
ImagePNG( $image );
ImageDestroy( $image );
ImageDestroy( $stamp );
?>
