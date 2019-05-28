<form method="post" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] );?>">
	<input type="text" name="month"/>Enter mm:dd:yy : 
	<input type="text" name="day"/>
	<input type="text" name="year"/>
	<br>
	<input type="submit" name="Submit">
</form>
<?php
if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	if ( ! checkdate( $_POST['month'], $_POST['day'], $_POST['year'] ) ) {
		print 'The date you entered does not exist!';
	} else {
		print 'The date exists.';
	}
}
?>
