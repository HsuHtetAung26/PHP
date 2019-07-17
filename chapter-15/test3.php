<?php
http_response_code(401);
$error_body = [
	"error" => "Unauthorized",
	"code" => 1,
	"message" => "Only authenticated users can read " . $_SERVER['REQUEST_URI'],
	"url" => "http://developer.example.com/error/1"
];
print json_encode( $error_body );
http_response_code(503);
$error_body = [
	"error" => "Down for maintenance",
	"code" => 2,
	"message" => "Check back in two hours.",
	"url" => "http://developer.example.com/error/2"
];
print json_encode( $error_body );
?>
