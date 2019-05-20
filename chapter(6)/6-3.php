<?php
class Entree {
	public $name;
	public $ingredients = array();
	/**
	  * check input ingredients
	  * @param string $ingredient
	  */
	public function hasIngredient( $ingredient ) {
		return in_array( $ingredient, $this->ingredients );
	}
	/**
	  * return sizes 
	  */
	public static function getSizes() {
		return array( 'small', 'medium', 'large' );
	}
}
$sizes = Entree::getSizes();
foreach( $sizes as $size ) {
		print $size . ' ';
}
?>
