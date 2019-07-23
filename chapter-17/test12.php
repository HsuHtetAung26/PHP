<?php
include 'imageftcenter.php';
$image = ImageCreateFromPNG( '/Users/administrator/Downloads/button.png' ); 
$size = 24;
$angle = 0;
$color = 0x000000;
$fontfile = '/Users/administrator/Downloads/stocky/stocky.ttf'; 
$text = 'Button Testing';
list( $x, $y ) = ImageFTCenter( $image, $size, $angle, $fontfile, $text );
ImageFTText( $image, $size, $angle, $x, $y, $color, $fontfile, $text );
ImageColorTransparent( $image, ImageColorAllocateAlpha( $image, 0, 0, 0, 127 ) );
ImageAlphaBlending( $image, false );
ImageSaveAlpha( $image, true );
header( 'Content-type: image/png' );
ImagePNG( $image );
ImagePSFreeFont( $font );
ImageDestroy( $image );
?>
