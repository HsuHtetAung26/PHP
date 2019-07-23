 <?php
$size = 100;
$image = ImageCreateTrueColor( $size, $size );
$black = 0x000000;
$white = 0xFFFFFF;
$style = array( $black, $black, $white, $white );
ImageSetStyle( $image, $style );
ImageLine( $image, 0, 0, 50, 50, IMG_COLOR_STYLED );
ImageFilledRectangle( $image, 50, 50, 100, 100, IMG_COLOR_STYLED );
$style = array( $white, $black );
ImageSetStyle( $image, $style );
ImageFilledRectangle( $image, 0, 0, 49, 49, IMG_COLOR_STYLED );
$style = array( $white, $white, $white, $white, $white, $black, $black, $black, $black, $black );
ImageSetStyle( $image, $style );
ImageFilledRectangle( $image, 0, 0, 49, 49, IMG_COLOR_STYLED );
header( 'Content-type: image/png' );
ImagePNG( $image );
ImageDestroy( $image );
?>
