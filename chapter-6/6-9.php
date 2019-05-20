<?php
class Entree {
	public $name;
	public $ingredients = array();
	/** 
	  * assign name and ingredients.
	  * @param string $name, $ingredients
	  */
	public function __construct( $name, $ingredients ) {
		if ( ! is_array( $ingredients ) ) {
			throw new Exception( '$ingredients must be an array' );
		}
		$this->name = $name;
		$this->ingredients = $ingredients;
	}
	/**
	  * check input ingredients
	  * @param string $ingredient
	  */
	public function hasIngredients( $ingredient ) {
		return in_array( $ingredient, $this->ingredients );
	}
}
try {
	$drink = new Entree( 'Glass of Milk', 'milk' );
	if ( $drink->hasIngredients( 'milk' ) ) {
		print "Yummy!";
	}

} catch ( Exception $e ) {
	print "Couldn't create the drink: " . $e->getMessage();
}
?>
