<?php
$secret_word = 'if i ate spinach';
if ( validate ( $_POST['username'], $_POST['password'] ) ) {
	setcookie( 'login', $_POST['username'].','.md5( $_POST['username'].$secret_word ) );
}
function validate( $user, $pass ) {
$users = array(
	'hsu' => 'fadj&32',
	'htet' => '8HEj838'
);
if ( isset( $users[ $user ] ) && ( $users[ $user ] === $pass ) ) {
	return true;
} else {
	return false;
}
}
unset( $username );
if ( isset( $_COOKIE['login'] ) ) {
	list( $c_username, $cookie_hash ) = split( ',', $_COOKIE['login'] );
	if ( md5( $c_username.$secret_word ) == $cookie_hash )  {
		$username = $c_username;
	} else {
		print "You have sent a bad cookie.";
	}
}
if ( isset( $username ) ) {
	print "Welcome, $username.";
} else {
	print "Welcome, anonymous user.";
}
?>
