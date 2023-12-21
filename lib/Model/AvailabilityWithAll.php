<?php
/**
 * AvailabilityWithAll
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
 * AvailabilityWithAll Class Doc Comment
 *
 * @category Class
 * @description This type is used to specify the quantity of the inventory items that are available for purchase if the items will be shipped to the buyer, and the quantity of the inventory items that are available for In-Store Pickup at one or more of the merchant&#x27;s physical stores.&lt;br&gt;&lt;br&gt;In-Store Pickup is only available to large merchants selling on the US, UK, Germany, and Australia sites.
 * @package  Ebay\Sell\Inventory
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AvailabilityWithAll implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AvailabilityWithAll';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pickup_at_location_availability' => '\Ebay\Sell\Inventory\Model\PickupAtLocationAvailability[]',
        'ship_to_location_availability' => '\Ebay\Sell\Inventory\Model\ShipToLocationAvailabilityWithAll'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pickup_at_location_availability' => null,
        'ship_to_location_availability' => null
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
        'pickup_at_location_availability' => 'pickupAtLocationAvailability',
        'ship_to_location_availability' => 'shipToLocationAvailability'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pickup_at_location_availability' => 'setPickupAtLocationAvailability',
        'ship_to_location_availability' => 'setShipToLocationAvailability'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pickup_at_location_availability' => 'getPickupAtLocationAvailability',
        'ship_to_location_availability' => 'getShipToLocationAvailability'
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
        $this->container['pickup_at_location_availability'] = isset($data['pickup_at_location_availability']) ? $data['pickup_at_location_availability'] : null;
        $this->container['ship_to_location_availability'] = isset($data['ship_to_location_availability']) ? $data['ship_to_location_availability'] : null;
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
     * Gets pickup_at_location_availability
     *
     * @return \Ebay\Sell\Inventory\Model\PickupAtLocationAvailability[]
     */
    public function getPickupAtLocationAvailability()
    {
        return $this->container['pickup_at_location_availability'];
    }

    /**
     * Sets pickup_at_location_availability
     *
     * @param \Ebay\Sell\Inventory\Model\PickupAtLocationAvailability[] $pickup_at_location_availability This container consists of an array of one or more of the merchant's physical stores where the inventory item is available for in-store pickup.<br><br>The store ID, the quantity available, and the fulfillment time (how soon the item will be ready for pickup after the order occurs) are all returned in this container.
     *
     * @return $this
     */
    public function setPickupAtLocationAvailability($pickup_at_location_availability)
    {
        $this->container['pickup_at_location_availability'] = $pickup_at_location_availability;

        return $this;
    }

    /**
     * Gets ship_to_location_availability
     *
     * @return \Ebay\Sell\Inventory\Model\ShipToLocationAvailabilityWithAll
     */
    public function getShipToLocationAvailability()
    {
        return $this->container['ship_to_location_availability'];
    }

    /**
     * Sets ship_to_location_availability
     *
     * @param \Ebay\Sell\Inventory\Model\ShipToLocationAvailabilityWithAll $ship_to_location_availability ship_to_location_availability
     *
     * @return $this
     */
    public function setShipToLocationAvailability($ship_to_location_availability)
    {
        $this->container['ship_to_location_availability'] = $ship_to_location_availability;

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
