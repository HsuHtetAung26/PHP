<?php
$flavors = array( 'Vanilla','Chocolate','Rhinoceros' );
$defaults = array(
	'name' => '',
	'age' => '',
	'flavor' => array()
);
foreach ( $flavors as $flavor ) {
	$defaults['flavor'][ $flavor ] = '';
 }
if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
	$errors = array();
	include __DIR__ . '/show-form.php';
} else {
	if ( count( $errors ) ) {
		if ( isset( $_POST['name'] ) ) {
			$defaults['name'] = $_POST['name'];
		}
		if ( isset( $_POST['age'] ) ) {
			$defaults['age'] = "checked='checked'";
		}
		foreach ( $flavors as $flavor ) {
			if ( isset( $_POST['flavor'] ) && ( $_POST['flavor'] == $flavor ) ) {
				$defaults['flavor'][ $flavor ] = "selected='selected'";
			}
		}
		include __DIR__ . '/show-form.php';
	} else {
		print 'The form is submitted!';
	}
}
?>
