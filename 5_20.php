<?php
$dinner = 'Curry Cuttlefish';
/**
 * print a local variable within the function.
 */
function vegetarian_dinner() { 
	print "Dinner is $dinner, or ";
	$dinner = 'Sauteed Pea Shoots';
	print $dinner;
	print "<br>";
}
/**
 * print a local variable within the function.
 */
function kosher_dinner() { 
	print "Dinner is $dinner, or ";
	$dinner = 'Kung Pao Chickern';
	print $dinner;
	print "<br>";
}
print "Vegetarian ";
vegetarian_dinner();
print "Kosher ";
kosher_dinner();
print "Regular dinner is $dinner";
?>
