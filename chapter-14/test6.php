<?php
$url = 'http://www.example.com/submit.php';
$body = 'monkey=uncle&amp;rhino=aunt';
$options = array(
	'method' => 'POST',
	'content' => $body,
	'header' => 'Content-type: application/x-www-form-urlencoded'
); 
$context = stream_context_create( array( 'http' => $options ) ); 
print file_get_contents( $url, false, $context );
?>
