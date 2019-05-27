<form method="post">
    What is your favourite ice cream flavor?
    <input type="text" name="flavor" />
    <br><br>
    What is your favourite color?
    <input type="text" name="color" />
    <br>
    <input type="submit" value="Submit" />
</form>
<?php
if ( ! ( filter_has_var( INPUT_POST, 'flavor' ) && ( strlen( filter_input( INPUT_POST, 'flavor' ) ) > 0 ) ) ) {
	print 'You must enter your favorite ice cream flavor.';
}
if ( filter_has_var( INPUT_POST, 'color' ) && ( strlen( filter_input( INPUT_POST, 'color', FILTER_SANITIZE_STRING ) ) <= 5 ) ) {
	print 'Color must be more than 5 characters.';
}
?>
