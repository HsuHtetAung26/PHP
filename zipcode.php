<?php
$zipcode = trim($_POST['zipcode']);
$zip_length = strlen($zipcode);
if ($zip_length != 5) {
print "Please enter a zip code that is 5 characters long."; }
?>
