<?php
$reader = new XMLReader();
$reader->XML( $reader );
while ( $reader->read() ) {
	if ( $reader->nodeType == XMLREADER::ELEMENT && $reader->localName == 'book' ) {
	$reader->moveToAttribute('isbn');
	print $reader->value . '<br>'; }
}
?>
