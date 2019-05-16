<?php
$dinner = 'Curry Cuttlefish';
/** 
 * print local and global variables
 */
function macrobiotic_dinner() {
	$dinner = "Some Vegetables";
	print "Dinner is $dinner";
	print " but I'd rather have ";
	print $GLOBALS['dinner'];
	print "<br>";
}
macrobiotic_dinner();
print "Regular dinner is: $dinner";
?>
