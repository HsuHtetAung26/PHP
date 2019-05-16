<?php 
/**
 * Set the background color
 * @param String $color
 */
function page_header3( $color = 'cc3399' ) { 
print '<html><head><title>Welcome to my site</title></head>';
print '<body bgcolor="#' . $color . '">';
}
page_header3();
?>
