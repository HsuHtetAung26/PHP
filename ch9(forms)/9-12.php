<form method='post' action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] );?>">
	<input type='radio' name='food' value='eggs'/> EggBenedict
	<input type='radio' name='food' value='toast'/> Buttered Toast with Jam
	<input type='radio' name='food' value='coffee'/> Piping Hot Coffee 
	<input type='radio' name='food' value='tea'/> Lemon Tea
	<input type="submit" name="Submit">
</form>
<?php
$choices = array(
	'eggs' => 'Eggs Benedict',
	'toast' => 'Buttered Toast with Jam',
	'coffee' => 'Piping Hot Coffee'
);
if( $_SERVER['REQUEST_METHOD'] == 'POST') {
	if( isset( $_POST['food'] ) ) {
		if ( ! array_key_exists( $_POST['food'], $choices ) ) {
			echo 'You must select a valid choice.';
		} else {
			echo 'Your food is available.';
		}
	}
}
?>
