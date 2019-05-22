<?php
echo $_SERVER['HTTP_USER_AGENT'];
echo '<br>';
$headers = getallheaders();
echo $headers['User-Agent'];
?>
