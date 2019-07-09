<?php
$xsl = new DOMDocument;
$xsl->load( __DIR__ . '/style.xsl' );
$xslt = new XSLTProcessor();
$xslt->importStylesheet( $xsl );
$xml = new DOMDocument;
$xsl->load( __DIR__ . '/address-book.xml' );
$results = $xslt->transformToXML( $xml );
$results = $xslt->transformToURI( $xml, 'results.txt' ); // Transform to DOM object
$results = $xslt->transformToDoc( $xml );
?>
