<?php
$meal =array('Walnut Bun' =>1,
			'Cashew Nuts and White Mushrooms' => 4.95,
			'Dried Mulberries' =>3.00,
			'Eggplant with Chill Sauce' =>6.50);
			foreach($meal as $dish => $price)
			{
			$meal[$dish]=$meal[$dish]*2;
			}
			foreach($meal as $dish => $price)
			{
				printf("The new price of %s is \$%.2f.\n",$dish,$price);
				echo "<br>";
			}
?>
