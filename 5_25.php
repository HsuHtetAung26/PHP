<?php
/**
 * Calculate amount of the meal.
 * @param Float $meal
 * @param Float $tax
 * @param Float $tip
 */
function restaurant_check( $meal, $tax, $tip ) : float {
	$tax_amount = $meal * ( $tax / 100 );
	$tip_amount = $meal * ( $tip / 100 );
	$total_amount = $meal + $tax_amount + $tip_amount;
	return $total_amount;
}
?>
