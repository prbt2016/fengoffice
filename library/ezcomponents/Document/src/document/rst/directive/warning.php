<?php
/**
 * File containing the ezcDocumentRstWarningDirective class
 *
 * @package Document
 * @version 1.3.1
 * @copyright Copyright (C) 2005-2010 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Visitor for RST warning directives
 *
 * @package Document
 * @version 1.3.1
 */
class ezcDocumentRstWarningDirective extends ezcDocumentRstDirective implements ezcDocumentRstXhtmlDirective
{
    /**
     * Transform directive to docbook
     *
     * Create a docbook XML structure at the directives position in the
     * document.
     *
     * @param DOMDocument $document
     * @param DOMElement $root
     * @return void
     */
    public function toDocbook( DOMDocument $document, DOMElement $root )
    {
        $note = $document->createElement( 'warning' );
        $root->appendChild( $note );

        $paragraph = $document->createElement( 'para' );
        $note->appendChild( $paragraph );

        $paragraph->appendChild( new DOMText( $this->node->parameters ) );
    }

    /**
     * Transform directive to HTML
     *
     * Create a XHTML structure at the directives position in the document.
     *
     * @param DOMDocument $document
     * @param DOMElement $root
     * @return void
     */
    public function toXhtml( DOMDocument $document, DOMElement $root )
    {
        $note = $document->createElement( 'p', htmlspecialchars( $this->node->parameters ) );
        $note->setAttribute( 'class', 'warning' );
        $root->appendChild( $note );
    }
}

?>
