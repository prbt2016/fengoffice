<?php
/**
 * File containing the ezcDocumentWikiBulletListNode struct
 *
 * @package Document
 * @version 1.3.1
 * @copyright Copyright (C) 2005-2010 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Struct for Wiki document bullet list abstract syntax tree nodes
 *
 * @package Document
 * @version 1.3.1
 */
class ezcDocumentWikiBulletListNode extends ezcDocumentWikiListNode
{
    /**
     * Bullet list indentation level
     *
     * @var int
     */
    public $level = 1;

    /**
     * Construct Wiki node
     *
     * @param ezcDocumentWikiToken $token
     * @param int $type
     * @return void
     */
    public function __construct( ezcDocumentWikiToken $token )
    {
        parent::__construct( $token );
        $this->level = $token->indentation;
    }

    /**
     * Set state after var_export
     *
     * @param array $properties
     * @return void
     * @ignore
     */
    public static function __set_state( $properties )
    {
        $nodeClass = __CLASS__;
        $node = new $nodeClass( $properties['token'] );
        $node->nodes = $properties['nodes'];
        return $node;
    }
}

?>
