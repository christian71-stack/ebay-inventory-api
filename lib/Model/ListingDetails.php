<?php
/**
 * ListingDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ebay\Sell\Inventory
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Inventory API
 *
 * The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There are also methods in this API that will convert eligible, active eBay listings into the Inventory API model.
 *
 * OpenAPI spec version: 1.17.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.51
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ebay\Sell\Inventory\Model;

use \ArrayAccess;
use \Ebay\Sell\Inventory\ObjectSerializer;

/**
 * ListingDetails Class Doc Comment
 *
 * @category Class
 * @description This type is used by the &lt;strong&gt;listing&lt;/strong&gt; container in the &lt;strong&gt;getOffer&lt;/strong&gt; and &lt;strong&gt;getOffers&lt;/strong&gt; calls to provide the eBay listing ID, the listing status, and quantity sold for the offer. The &lt;strong&gt;listing&lt;/strong&gt; container is only returned for published offers, and is not returned for unpublished offers.
 * @package  Ebay\Sell\Inventory
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListingDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ListingDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'listing_id' => 'string',
        'listing_on_hold' => 'bool',
        'listing_status' => 'string',
        'sold_quantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'listing_id' => null,
        'listing_on_hold' => null,
        'listing_status' => null,
        'sold_quantity' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'listing_id' => 'listingId',
        'listing_on_hold' => 'listingOnHold',
        'listing_status' => 'listingStatus',
        'sold_quantity' => 'soldQuantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'listing_id' => 'setListingId',
        'listing_on_hold' => 'setListingOnHold',
        'listing_status' => 'setListingStatus',
        'sold_quantity' => 'setSoldQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'listing_id' => 'getListingId',
        'listing_on_hold' => 'getListingOnHold',
        'listing_status' => 'getListingStatus',
        'sold_quantity' => 'getSoldQuantity'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['listing_id'] = isset($data['listing_id']) ? $data['listing_id'] : null;
        $this->container['listing_on_hold'] = isset($data['listing_on_hold']) ? $data['listing_on_hold'] : null;
        $this->container['listing_status'] = isset($data['listing_status']) ? $data['listing_status'] : null;
        $this->container['sold_quantity'] = isset($data['sold_quantity']) ? $data['sold_quantity'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets listing_id
     *
     * @return string
     */
    public function getListingId()
    {
        return $this->container['listing_id'];
    }

    /**
     * Sets listing_id
     *
     * @param string $listing_id The unique identifier of the eBay listing that is associated with the published offer.
     *
     * @return $this
     */
    public function setListingId($listing_id)
    {
        $this->container['listing_id'] = $listing_id;

        return $this;
    }

    /**
     * Gets listing_on_hold
     *
     * @return bool
     */
    public function getListingOnHold()
    {
        return $this->container['listing_on_hold'];
    }

    /**
     * Sets listing_on_hold
     *
     * @param bool $listing_on_hold Indicates if a listing is on hold due to an eBay policy violation.<br><p>If a listing is put on hold, users are unable to view the listing details, the listing is hidden from search, and all attempted purchases, offers, and bids for the listing are blocked. eBay, however, gives sellers the opportunity to address violations and get listings fully reinstated. A listing will be ended if a seller does not address a violation, or if the violation can not be rectified.</p><br><p>If a listing is fixable, the seller should be able to view the listing details and this boolean will be returned as true.</p><br><p>Once a listing is fixed, this boolean will no longer be returned.</p>
     *
     * @return $this
     */
    public function setListingOnHold($listing_on_hold)
    {
        $this->container['listing_on_hold'] = $listing_on_hold;

        return $this;
    }

    /**
     * Gets listing_status
     *
     * @return string
     */
    public function getListingStatus()
    {
        return $this->container['listing_status'];
    }

    /**
     * Sets listing_status
     *
     * @param string $listing_status The enumeration value returned in this field indicates the status of the listing that is associated with the published offer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ListingStatusEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setListingStatus($listing_status)
    {
        $this->container['listing_status'] = $listing_status;

        return $this;
    }

    /**
     * Gets sold_quantity
     *
     * @return int
     */
    public function getSoldQuantity()
    {
        return $this->container['sold_quantity'];
    }

    /**
     * Sets sold_quantity
     *
     * @param int $sold_quantity This integer value indicates the quantity of the product that has been sold for the published offer.
     *
     * @return $this
     */
    public function setSoldQuantity($sold_quantity)
    {
        $this->container['sold_quantity'] = $sold_quantity;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}