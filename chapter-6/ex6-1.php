<?php
class Ingredient {
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
	  * return name.
	  */
	public function getName() {
		return $this->name;
	}
	/**
	  * return cost.
	  */
	public function getCost() {
		return $this->cost;
	}
}
?>
