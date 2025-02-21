<?php
/**
 * File containing the ezcDocumentDocbookToEzXmlConverterOptions class.
 *
 * @package Document
 * @version 1.3.1
 * @copyright Copyright (C) 2005-2010 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Class containing the basic options for the ezcDocumentEzp3Xml class
 *
 * @property ezcDocumentEzXmlLinkConverter $linkConverter
 *           Object fetching the URL for link and node or object IDs, used for
 *           references inside of eZXml document.
 *
 * @package Document
 * @version 1.3.1
 */
class ezcDocumentDocbookToEzXmlConverterOptions extends ezcDocumentConverterOptions
{
    /**
     * Constructs an object with the specified values.
     *
     * @throws ezcBasePropertyNotFoundException
     *         if $options contains a property not defined
     * @throws ezcBaseValueException
     *         if $options contains a property with a value not allowed
     * @param array(string=>mixed) $options
     */
    public function __construct( array $options = array() )
    {
        $this->linkConverter = new ezcDocumentEzXmlDummyLinkConverter();

        parent::__construct( $options );
    }

    /**
     * Sets the option $name to $value.
     *
     * @throws ezcBasePropertyNotFoundException
     *         if the property $name is not defined
     * @throws ezcBaseValueException
     *         if $value is not correct for the property $name
     * @param string $name
     * @param mixed $value
     * @ignore
     */
    public function __set( $name, $value )
    {
        switch ( $name )
        {
            case 'linkConverter':
                if ( !is_object( $value ) ||
                     ( !$value instanceof ezcDocumentEzXmlLinkConverter ) )
                {
                    throw new ezcBaseValueException( $name, $value, 'instanceof ezcDocumentEzXmlLinkConverter' );
                }

                $this->properties[$name] = $value;
                break;

            default:
                parent::__set( $name, $value );
        }
    }
}

?>
