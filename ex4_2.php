<?php
$cities = array(
		'New York' => 8175133,
		'Los Angeles' => 3792621,
		'Chicago' => 2695598,
		'Houston' => 2100263,
		'Philadelphia' => 1526006,
		'Phoenix' => 1445632,
		'San Antonio' => 1327407,
		'San Diego' => 1307402,
		'Dallas' => 1197816,
		'San Jose' => 945942
);
print "<table> <tr><td> Cities </td><td> Population </td></tr>";
foreach ( $cities as $key => $value ) {
	print "<tr><td> $key </td> <td> " . number_format( $value ) . " </td></tr>\n";
}
$total = array_sum( $cities );
print "<tr><td> Total </td><td> " . number_format( $total ) . " </td></tr>";
print "</table>";
print "<br>";
asort( $cities );
print "After sorting (Populations),";
print "<table> <tr><td> Cities </td><td> Population </td></tr>";
foreach ( $cities as $key => $value ) {
	print "<tr><td> $key </td> <td> " . number_format( $value ) . " </td></tr>\n";
}
print "</table>";
print "<br>";
ksort( $cities );
print "After sorting (Locations),";
//print "<br>";
print "<table> <tr><td> Cities </td><td> Population </td></tr>";
foreach ( $cities as $key => $value ) {
	print "<tr><td> $key </td> <td> " . number_format( $value ) . " </td></tr>\n";
}
print "</table>";
?>
