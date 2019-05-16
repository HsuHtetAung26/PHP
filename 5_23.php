<?php
$dinner = 'Curry Cuttlefish';
/**
 * Print local and global variables.
 */
function vegetarian_dinner() {
	global $dinner;
	print "Dinner was $dinner, but now it's ";
	$dinner = 'Sauteed Pea Shoots.';
	print $dinner;
	print "<br>";
}
print "Regular Dinner is $dinner.";
print "<br>";
vegetarian_dinner();
print "Regular dinner is $dinner";
print "<br>";
?>
