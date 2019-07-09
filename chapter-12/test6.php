<?php
$xsl = new DOMDocument;
$xsl->load( __DIR__ . '/style.xsl' );
$xslt = new XSLTProcessor();
$xslt->importStylesheet( $xsl );
$xml = new DOMDocument;
$xsl->load( __DIR__ . '/style.xsl' );
$results = $xslt->transformToXML( $xml ); 
$results = $xslt->transformToURI( $xml, 'results.txt' );
$results = $xslt->transformToDoc( $xml );
?>
