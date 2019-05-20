<?php
class IngredientCost {
	public $name;
	public $cost;
	/** 
	  * assign name and cost.
	  * @param string $name, $cost
	  */
	public function __construct( $name, $cost ) {
	$this->name = $name;
	$this->cost = $cost;
	}
	/**
	  * set cost.
	  */
	public function setCost( $cost ) {
		$this->cost = $cost;
	}

}
?>