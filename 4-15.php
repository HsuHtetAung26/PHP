
<?php
$meals = array('Walnut Bun' => 1,
'Cashew Nuts and White Mushrooms' => 4.95,
'Dried Mulberries' => 3.00,
'Eggplant with Chili Sauce' => 6.50,
'Shrimp Puffs' => 0); // Shrimp Puffs are free!
$books = array("The Eater's Guide to Chinese Characters", 'How to Cook and Eat in Chinese');
// This is true
if (array_key_exists('Shrimp Puffs',$meals)) { print "Yes, we have Shrimp Puffs";
}
?>