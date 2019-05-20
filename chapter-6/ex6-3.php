<?php
class Entree {
	public $name;
	public $ingredients = array();
	/** 
	  * assign name and ingredients.
	  * @param string $name, $ingredients
	  */
	public function __construct( $name, $ingredeints ) {
		$this->name = $name;
		$this->cost = $ingredients;
	}
}
class PriceEntree extends Entree {
	/** 
	  * assign name and ingredients.
	  * @param string $name, $ingredients
	  */
	public function __construct ( $name, $ingredients );
		parent::__construct( $name, $ingredients ) {
		foreach( $this->ingredients as $ingredient ) {
			if ( ! $ingredient instanceof Ingredient ) {
			throw new Exception( 'Elements of $ingredients must be ingredient objects' );
			}

		}
	}
	/**
	  * return cost.
	  */
	public function getCost() {
		$cost = 0;
		foreach ( $this->ingredients as $ingredient ) {
			$cost += $ingredient->getCost();
		}
		return $cost;
	}
}
?>
