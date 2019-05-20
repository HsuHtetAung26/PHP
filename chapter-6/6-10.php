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
class ComboMeal extends Entree {
	/** 
	  * assign name and entree objects.
	  * @param string $name, $entrees
	  */
	public function __construct( $name, $entrees ) {
		parent::__construct( $name, $entrees );
		foreach ( $entrees as $entree ) {
			if ( ! $entree instanceof Entree ) {
				throw new Exception( 'Elements of $entrees must be Entree objects' );
			}
		}
	}
	/**
	  * check input ingredients
	  * @param string $ingredient
	  */
	public function hasIngredients( $ingredient ) {
		foreach( $this->ingredients as $entree ) {
			if( $entree->hasIngredients( $ingredient ) ) {
				return true;
			}
		}
		return false;
	}
}
$soup = new Entree( 'Chicken Soup', array( 'chicken', 'water' ) );
$sandwich = new Entree( 'Chicken Sandwich', array( 'chicken', 'bread' ) );
$combo = new ComboMeal( 'Soup & Sandwich', array( $soup, $sandwich ) );
foreach ( ['chicken', 'water', 'pickles','bread'] as $ing ) {
	if ( $combo->hasIngredients( $ing ) ) {
		print "Something in the combo contains $ing.";
		print "<br>";
	}
}
?>
