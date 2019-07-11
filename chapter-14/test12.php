
<?php
$url = 'http://www.example.com/special-header.php';
$header = "X-Factor: 12\r\nMy-Header: Bob";
$options = array( 'header' => $header );
$context = stream_context_create( array( 'http' => $options ) ); 
print file_get_contents( $url, false, $context );
?>
