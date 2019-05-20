<?php
class Entree {
	public $name;
	public $ingredients = array();
	/**
	  * assign ingredients.
	  * @param string $ingredient
	 */
	public function hasIngredients( $ingredient ) {
		return in_array( $ingredient, $this->ingredients );
	}
}
$soup = new Entree;
$soup->name = 'Chicken Soup';
$soup->ingredients = array( 'chicken', 'water' );
$sandwich = new Entree;
$sandwich->name = 'Chicken Sandwich';
$sandwich->ingredients = array( 'chicken', 'bread');
foreach( ['chicken', 'lemon', 'bread', 'water'] as $ing ) {
	if ( $soup->hasIngredients( $ing ) ) {
		print "Soup contains $ing.";
		print "<br>";
	}
	if ( $sandwich->hasIngredients( $ing ) ) {
		print "Sandwich contains $ing.";
		print "<br>";
	}
}
?>
