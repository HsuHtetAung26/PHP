<?php
$letters[0] = 'A';
$letters[1] = 'B';
$letters[3] = 'D';
$letters[2] = 'C';
//foreach($letters as $letter)
//{
//	print $letter;
//}
for ( $i=0, $num_letters = count( $letters ); $i<$num_letters; $i++ )
{
	print $letters[ $i ];
}
?>
