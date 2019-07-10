<?php
$body = '<p>I like pickles and herring.</p>
	<a href="pickle.php"><img src="pickle.jpg"/>A pickle picture</a>
	I have a herringbone-patterned toaster cozy.
	<herring>Herring is not a real HTML element!</herring>';
$words = array( 'pickle','herring' );
$patterns = array();
$replacements = array();
foreach ( $words as $i => $word ) {
	$patterns[] = '/' . preg_quote( $word ) . '/i';
	$replacements[] = "<span class='word-$i'>$word</span>";
}
$xhtml = tidy_repair_string( $body, array( 'output-xhtml' => true ) );
$doc = new DOMDocument;
$doc->loadXml( $xhtml );
$body = $doc->getElementsByTagName('body')->item(0);
$xpath = new DOMXpath( $doc );
foreach ( $xpath->query( "descendant-or-self::text()", $body ) as $textNode ) {
	$replaced = preg_replace( $patterns, $replacements, $textNode->wholeText );
	if ( $replaced !== $textNode->wholeText ) {
		$fragment = $textNode->ownerDocument->createDocumentFragment();
		$fragment->appendXml( $replaced );
		$textNode->parentNode->replaceChild( $fragment, $textNode );
	}
}
$markedup = '';
foreach ( $body->childNodes as $node ) {
	$markedup .= $doc->saveXml( $node );
}
print $markedup;
?>
