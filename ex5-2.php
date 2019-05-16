<?php
/**
 * Accept image filename and prepend a global variable to filename to make full URL
 * @param string $file
 * @param string $alt
 * @param int $height
 * @param int $width
 */
function html_img2( $file, $alt = null, $height = null, $width = null ) { 
	if ( isset( $GLOBALS['image_path']) ) {
		$file = $GLOBALS['image_path'] . $file;
	}
	$html = '<img src="' . $file . '"';
	if ( isset( $alt ) ) {
		$html .= ' alt="' . $alt . '"';
	}
	if ( isset( $height ) ) {
		$html .= ' height="' . $height . '"';
	}
	if ( isset( $width ) ) {
		$html .= ' width="' . $width . '"';
	}
	$html .='/>';
	return $html;
}
?>
