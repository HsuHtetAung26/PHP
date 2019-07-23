<?php
$filename = __DIR__ . '/php.png'; 
$w = 50;
$h = 20;
$original = ImageCreateFromPNG( $filename );
$thumbnail = ImageCreateTrueColor( $w, $h );
ImageColorTransparent( $thumbnail, ImageColorAllocateAlpha( $thumbnail, 0, 0, 0, 127 ) );
ImageAlphaBlending( $thumbnail, false );
ImageSaveAlpha( $thumbnail, true );
$x = ImageSX( $original );
$y = ImageSY( $original );
$scale = min( $x / $w, $y / $h );
ImageCopyResampled( $thumbnail, $original, 0, 0,( $x - ( $w * $scale ) ) / 2, ( $y - ( $h * $scale ) ) / 2, $w, $h, $w * $scale, $h * $scale );
header( 'Content-type: image/png' );
ImagePNG( $thumbnail );
ImageDestroy( $original );
ImageDestroy( $thumbnail );
?>
