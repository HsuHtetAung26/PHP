<?php
class Entree {
	public $name;
	public $ingredients = array();
	/**
	  * assign name and ingredients.
	  * @param string $name, $ingredients
	  */
	public function __construct( $name, $ingredients ) {
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
$soup = new Entree( 'Chicken Soup', array( 'Chicken', 'Water' ) );
$sandwich = new Entree( 'Chicken Sandwich', array( 'Chicken', 'Bread' ) );
?>
