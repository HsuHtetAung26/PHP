<form method="post" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] );?>">
	<input type="checkbox" name="boroughs[]" value="bronx"> The Bronx
	<input type="checkbox" name="boroughs[]" value="brooklyn"> Brooklyn
	<input type="checkbox" name="boroughs[]" value="manhattan"> Manhattan
	<input type="checkbox" name="boroughs[]" value="queens"> Queens
	<input type="checkbox" name="boroughs[]" value="statenisland"> Staten Island
	<input type="submit" name="Submit">
</form>
<?php
if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	print 'I love ' . join( ' and ', $_POST['boroughs'] ) . '!';
}
?>
