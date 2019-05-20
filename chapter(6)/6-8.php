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
$drink = new Entree( 'Glass of Milk', array( 'milk', 'chocolate' ) );
if ( $drink->hasIngredients( 'milk' ) ) {
	print "Yummy!";
}
?>
