<?php
$c = curl_init( 'http://www.example.com/special-header.php' );
curl_setopt( $c, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $c, CURLOPT_HTTPHEADER, array( 'X-Factor: 12', 'My-Header: Bob' ) );
$page = curl_exec( $c );
print $page;
curl_close( $c );
?>
