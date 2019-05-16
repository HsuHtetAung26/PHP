<?php
$dinner = 'Curry Cuttlefish';
/**
 * Print global variable.
 */
function hungry_dinner() {
	$GLOBALS['dinner'] .= ' and Deep-fried Taro';
}
print "Regular dinner is $dinner";
print "<br>";
hungry_dinner();
print "Hungry dinner is $dinner";
?>
