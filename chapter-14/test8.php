<?php
$url = 'http://www.example.com/meals/123';
$header = "Content-Type: application/json"; 
$body = '[{
	"type": "appetizer",
	"dish": "Chicken Soup"
	}, {
		"type": "main course",
		"dish": "Fried Monkey Brains"
	}]';
$options = array( 'method' => 'put', 'header' => $header, 'content' => $body );
$context = stream_context_create(array( 'http' => $options ) ); 
print file_get_contents( $url, false, $context );
?>
