<?php
if ( $_SERVER["REQUEST_METHOD"] == 'POST' ) {
	$body = file_get_contents( 'php://input' );
	switch( strtolower( $_SERVER['HTTP_CONTENT_TYPE'] ) ) {
		case "application/json":
			$job = json_decode( $body );
			break;
		case "text/xml":
			break;
	}
	$id = create( $job );
	$json = json_encode( array( 'id' => $id ) );
	http_response_code(201);
	$site = 'https://api.example.com';
	header( "Location: $site/" . $_SERVER['REQUEST_URI'] . "/$id" );
	header( 'Content-Type: application/json' );
	print $json;
}
?>
