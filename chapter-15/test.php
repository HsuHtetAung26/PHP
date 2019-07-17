<?php
$method = strtolower( $_SERVER['REQUEST_METHOD'] );
switch( $method ) {
	case 'get':
		break;
	case 'post':
		post_book( $request );
		break;
	case 'put':
		put_book( $request );
		break;
	case 'delete':
		delete_book( $request );
		break;
	default:
		http_response_code( 405 );
}
?>
