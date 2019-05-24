<?php
setcookie( 'user', 'sts', time() - 3600 );
echo 'Cookie 'user' is deleted.';
?>
