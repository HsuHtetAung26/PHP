$dom = new DOMDocument( '1.0');
$book_element = $dom->createElement( 'book' );
$book = $dom->appendChild( $book_element );
$title_element = $dom>createElement( 'title' );
$title->appendChild( $text_node );
$title_element = $dom->createElement( 'title' );
$text_node = $dom->createTextNode( 'PHP Cookbook' );
$book->appendChild( $title_element );
$title->setAttribute( 'edition', '3' );
<title edition-"3"> PHP Cookbook</title>
$books=$dom->saveXML();
$dom->save( 'books.xml' );
$dom->formatOutput = true;
