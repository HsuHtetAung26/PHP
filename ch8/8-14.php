<?php
ob_start(); 
print 'I have not decided if I want to send a cookie yet.';
print '<br>';
setcookie( 'heron', 'great blue' ); 
print 'Yes, sending that cookie was the right decision.';
ob_end_flush();
?>
