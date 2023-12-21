<?php
/**
 * BestOffer
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
 * BestOffer Class Doc Comment
 *
 * @category Class
 * @description This type is used by the &lt;strong&gt;bestOfferTerms&lt;/strong&gt; container, which is used if the seller would like to support the Best Offer feature on their listing.
 * @package  Ebay\Sell\Inventory
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BestOffer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BestOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_accept_price' => '\Ebay\Sell\Inventory\Model\Amount',
        'auto_decline_price' => '\Ebay\Sell\Inventory\Model\Amount',
        'best_offer_enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_accept_price' => null,
        'auto_decline_price' => null,
        'best_offer_enabled' => null
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
        'auto_accept_price' => 'autoAcceptPrice',
        'auto_decline_price' => 'autoDeclinePrice',
        'best_offer_enabled' => 'bestOfferEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_accept_price' => 'setAutoAcceptPrice',
        'auto_decline_price' => 'setAutoDeclinePrice',
        'best_offer_enabled' => 'setBestOfferEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_accept_price' => 'getAutoAcceptPrice',
        'auto_decline_price' => 'getAutoDeclinePrice',
        'best_offer_enabled' => 'getBestOfferEnabled'
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
        $this->container['auto_accept_price'] = isset($data['auto_accept_price']) ? $data['auto_accept_price'] : null;
        $this->container['auto_decline_price'] = isset($data['auto_decline_price']) ? $data['auto_decline_price'] : null;
        $this->container['best_offer_enabled'] = isset($data['best_offer_enabled']) ? $data['best_offer_enabled'] : null;
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
     * Gets auto_accept_price
     *
     * @return \Ebay\Sell\Inventory\Model\Amount
     */
    public function getAutoAcceptPrice()
    {
        return $this->container['auto_accept_price'];
    }

    /**
     * Sets auto_accept_price
     *
     * @param \Ebay\Sell\Inventory\Model\Amount $auto_accept_price auto_accept_price
     *
     * @return $this
     */
    public function setAutoAcceptPrice($auto_accept_price)
    {
        $this->container['auto_accept_price'] = $auto_accept_price;

        return $this;
    }

    /**
     * Gets auto_decline_price
     *
     * @return \Ebay\Sell\Inventory\Model\Amount
     */
    public function getAutoDeclinePrice()
    {
        return $this->container['auto_decline_price'];
    }

    /**
     * Sets auto_decline_price
     *
     * @param \Ebay\Sell\Inventory\Model\Amount $auto_decline_price auto_decline_price
     *
     * @return $this
     */
    public function setAutoDeclinePrice($auto_decline_price)
    {
        $this->container['auto_decline_price'] = $auto_decline_price;

        return $this;
    }

    /**
     * Gets best_offer_enabled
     *
     * @return bool
     */
    public function getBestOfferEnabled()
    {
        return $this->container['best_offer_enabled'];
    }

    /**
     * Sets best_offer_enabled
     *
     * @param bool $best_offer_enabled This field indicates whether or not the Best Offer feature is enabled for the listing. A seller can enable the Best Offer feature for a listing as long as the category supports the Best Offer feature.<br><br>The seller includes this field and sets its value to <code>true</code> to enable Best Offer feature.
     *
     * @return $this
     */
    public function setBestOfferEnabled($best_offer_enabled)
    {
        $this->container['best_offer_enabled'] = $best_offer_enabled;

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