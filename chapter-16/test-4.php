<?php
$ip = gethostbyname( 'www.google.com' ); // 172.217.31.132
echo $ip . '<br>';
$host = gethostbyaddr( '172.217.31.132' );
echo $host;
$host = 'this is not a good host name!';
if ( $host == ( $ip = gethostbyname( $host ) ) ) {
	echo 'Failure' . '<br>';
}
$hosts = gethostbynamel( 'www.yahoo.com' );
print_r( $hosts );
$addrs = dns_get_record( 'www.yahoo.com', DNS_AAAA );
print_r( $addrs );
?>
