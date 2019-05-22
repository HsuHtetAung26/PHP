<?php
session_start();
if ( $_POST['username'] == "testuser" && $_POST['password'] == "1234" ) {
	$_SESSION['user'] = $_POST['username'];
	echo 'Successful Validation';
} else {
	echo 'Wrong user name or password!!!<br>';
	print<<<_HTML_
	<a href="/login.php"> Please Try Again </a>
_HTML_;
	}
?>
