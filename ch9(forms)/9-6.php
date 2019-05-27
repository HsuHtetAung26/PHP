<form method="post">
How old are you? <input type="text" name="age"/>
Cost<input type="text" name="price"/>
<input type="submit" name="submit"/>
</form>
<?php
$age = filter_input( INPUT_POST, 'age', FILTER_VALIDATE_INT );
if ( $age === false ) {
	print "Submitted age is invalid.";
}
$price = filter_input( INPUT_POST, 'price', FILTER_VALIDATE_FLOAT );
if ( $price === false ) {
	print "Submitted price is invalid.";
}
?>
