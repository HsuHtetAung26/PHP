<?php
$specials = array( 
	array(
	'Chestnut Bun', 'Walnut Bun', 'Peanut Bun'),
	array('Chestnut Salad','Walnut Salad', 'Peanut Salad') 
);
for ( $i = 0, $num_specials = count( $specials ); $i < $num_specials; $i++ ) { // $num_sub is 3: the number of elements in each subarray
for ( $m = 0, $num_sub = count( $specials[ $i ] ); $m < $num_sub; $m++ ) {
print "Element [$i][$m] is " . $specials[ $i ][ $m ] . "\n"; }
print "<br>";
}
print "<br>";
?>