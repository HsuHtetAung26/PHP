
<form method='post' action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] );?>">
	<select name='food'>
		<option value='Eggs' name='egg'>Eggs</option>
		<option value='Toast' name='toast'>Toast</option>
		<option value='Coffee' name='coffee'>Coffee</option>
		<option value='bread' name='bread'>Bread</option>
	<input type="submit" name="Submit">
	</select>
</form>
<?php
$choices = array( 'Eggs','Toast','Coffee' );
if( $_SERVER['REQUEST_METHOD'] == 'POST') {
	if ( ! in_array( $_POST['food'], $choices ) ) {
		echo 'You must select a valid choice.';
	else {
		echo 'Your food is available';
	}
}
}
?>
