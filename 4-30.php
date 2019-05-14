<?php
$prices['dinner']['Sweet Corn and Asparagus'] = 12.50;
$prices['lunch']['Cashew Nuts and White Mushrooms'] = 4;
$prices['dinner']['Braised Bamboo Fungus'] = 8.95;
$prices['dinner']['total'] = $prices['dinner']['Sweet Corn and Asparagus']+ $prices['dinner']['Braised Bamboo Fungus'];					
$prices[0][0] = 'Chestnut Bun';
$prices[0][1] = 'Walnut Bun';
$prices[0][2] = 'Peanut Bun';
$prices[1][0] = 'Chestnut Salad';
$prices[1][1] = 'Walnut Salad';
$specials[1][] = 'Peanut Salad';
print $prices['dinner']['total'];
?>
