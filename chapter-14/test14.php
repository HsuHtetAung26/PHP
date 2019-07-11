<?php
$url = 'http://www.example.com/submit.php';
$stream = fopen( $url, 'r' );
$metadata = stream_get_meta_data( $stream );
foreach ( $metadata['wrapper_data'] as $header ) {
	print $header . '<br>';
}
