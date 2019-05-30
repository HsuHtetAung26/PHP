<?php
include 'config.php';
class AvgStatement extends PDOStatement {
	public function avg() {
		$sum = 0;
		$vars = get_object_vars( $this );
		foreach ( $vars as $var => $value ) {
			$sum += strlen( $value );
		}
	return $sum / count( $vars );
	}
}
$row = new AvgStatement;
$results = $conn->query( "SELECT symbol, planet FROM zodiac", PDO::FETCH_INTO, $row );
while ( $results->fetch() ) {
	print $row->symbol . ' belongs to ' . $row->planet . 'Average: ' . $row->avg() . '<br>';
}
?>
