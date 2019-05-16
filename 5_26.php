<?php
/**
 * Calculate amount of the meal.
 * @param int $meal
 * @param float $tax
 * @param int $tip
 */
function restaurant_check( $meal, $tax, $tip ) {
	$tax_amount = $meal * ( $tax / 100 );
	$tip_amount = $meal * ( $tip / 100 );
	$total_amount = $meal + $tax_amount + $tip_amount;
	return $total_amount;
}
/**
 * Return Payment method
 * @param int $cash_on_hand
 * @param float $amount
*/
function payment_method( $cash_on_hand, $amount ) {
	if ( $amount > $cash_on_hand ) {
		return 'credit card';
	} else {
		return 'cash';
	}
}
?>
