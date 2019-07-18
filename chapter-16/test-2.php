<?php
$to = 'hsu.htet.aung@digitallaboratory.net';
$subject = 'New Version of PHP Released!';
$body = 'Go to http://www.php.net and download it today!';
$header = "Reply-To: webmaster@example.com\r\n" . "Organization: The PHP Group";
mail( $to, $subject, $body, $header );
?>
