<?php
/**
 * File containing the ezcDocumentInvalidOdtException class.
 *
 * @package Document
 * @version 1.3.1
 * @copyright Copyright (C) 2005-2010 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Exception thrown if an expectation to an incoming DocBook document is not 
 * met during DocBook to ODT conversion.
 *
 * @package Document
 * @version 1.3.1
 */
class ezcDocumentInvalidOdtException extends ezcDocumentException
{
    /**
     * Creates a new exception.
     * 
     * @param DOMNode $affectedNode 
     * @param string $message 
     */
    public function __construct( DOMNode $affectedNode, $message )
    {
        parent::__construct(
            "The DocBook node {$node->localName} was invalid: $message"
        );
    }
}

?>
