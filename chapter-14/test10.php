<?php
$c = curl_init( 'http://www.google.com/' );
curl_setopt( $c, CURLOPT_COOKIE, 'user=ellen; activity=swimming' );
curl_setopt( $c, CURLOPT_RETURNTRANSFER, true );
$page = curl_exec( $c );
curl_close( $c );
print $page;
?>
