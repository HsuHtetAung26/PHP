<?php
/** 
 * Set background color.
 * @param String $color
 * @param String $title
 * @param String $header
 */
function page_header5( $color, $title, $header = 'Welcome' ) { 
	print '<html><head><title>Welcome to ' . $title. '</title></head>';
	print '<body bgcolor="#' . $color . '">';
	print "<h1>$header</h1>";
}
page_header5( '66cc99', 'my wonderful page' );
page_header5( '66cc99', 'my wonderful page', 'This page is great' );
?>
