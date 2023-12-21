<?php
/**
 * ExtendedProducerResponsibility
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
 * ExtendedProducerResponsibility Class Doc Comment
 *
 * @category Class
 * @description This type provides IDs for the producer or importer related to the new item, packaging, added documentation, or an eco-participation fee. In some markets, such as in France, this may be the importer of the item.
 * @package  Ebay\Sell\Inventory
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExtendedProducerResponsibility implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExtendedProducerResponsibility';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'eco_participation_fee' => '\Ebay\Sell\Inventory\Model\Amount',
        'producer_product_id' => 'string',
        'product_documentation_id' => 'string',
        'product_package_id' => 'string',
        'shipment_package_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'eco_participation_fee' => null,
        'producer_product_id' => null,
        'product_documentation_id' => null,
        'product_package_id' => null,
        'shipment_package_id' => null
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
        'eco_participation_fee' => 'ecoParticipationFee',
        'producer_product_id' => 'producerProductId',
        'product_documentation_id' => 'productDocumentationId',
        'product_package_id' => 'productPackageId',
        'shipment_package_id' => 'shipmentPackageId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eco_participation_fee' => 'setEcoParticipationFee',
        'producer_product_id' => 'setProducerProductId',
        'product_documentation_id' => 'setProductDocumentationId',
        'product_package_id' => 'setProductPackageId',
        'shipment_package_id' => 'setShipmentPackageId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eco_participation_fee' => 'getEcoParticipationFee',
        'producer_product_id' => 'getProducerProductId',
        'product_documentation_id' => 'getProductDocumentationId',
        'product_package_id' => 'getProductPackageId',
        'shipment_package_id' => 'getShipmentPackageId'
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
        $this->container['eco_participation_fee'] = isset($data['eco_participation_fee']) ? $data['eco_participation_fee'] : null;
        $this->container['producer_product_id'] = isset($data['producer_product_id']) ? $data['producer_product_id'] : null;
        $this->container['product_documentation_id'] = isset($data['product_documentation_id']) ? $data['product_documentation_id'] : null;
        $this->container['product_package_id'] = isset($data['product_package_id']) ? $data['product_package_id'] : null;
        $this->container['shipment_package_id'] = isset($data['shipment_package_id']) ? $data['shipment_package_id'] : null;
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
     * Gets eco_participation_fee
     *
     * @return \Ebay\Sell\Inventory\Model\Amount
     */
    public function getEcoParticipationFee()
    {
        return $this->container['eco_participation_fee'];
    }

    /**
     * Sets eco_participation_fee
     *
     * @param \Ebay\Sell\Inventory\Model\Amount $eco_participation_fee eco_participation_fee
     *
     * @return $this
     */
    public function setEcoParticipationFee($eco_participation_fee)
    {
        $this->container['eco_participation_fee'] = $eco_participation_fee;

        return $this;
    }

    /**
     * Gets producer_product_id
     *
     * @return string
     */
    public function getProducerProductId()
    {
        return $this->container['producer_product_id'];
    }

    /**
     * Sets producer_product_id
     *
     * @param string $producer_product_id <span class=\"tablenote\"><b>Note:</b> <b>THIS FIELD IS DEPRECATED AND NO LONGER SUPPORTED.</b> For sellers selling on the eBay France Marketplace, Extended Producer Responsibility ID fields are no longer set at the listing level. Instead, sellers must provide these IDs for each applicable category in their My eBay accounts. The URL will be based on the seller's home/registration site, and will use this pattern: https://accountsettings./epr-fr. Sellers based in the US will use <a href=\"https://accountsettings.ebay.com/epr-fr\" target=\"_blank\">https://accountsettings.ebay.com/epr-fr</a>, sellers based in France will use <a href=\"https://accountsettings.ebay.fr/epr-fr\" target=\"_blank\">https://accountsettings.ebay.fr/epr-fr</a>, and so on.</span>
     *
     * @return $this
     */
    public function setProducerProductId($producer_product_id)
    {
        $this->container['producer_product_id'] = $producer_product_id;

        return $this;
    }

    /**
     * Gets product_documentation_id
     *
     * @return string
     */
    public function getProductDocumentationId()
    {
        return $this->container['product_documentation_id'];
    }

    /**
     * Sets product_documentation_id
     *
     * @param string $product_documentation_id <span class=\"tablenote\"><b>Note:</b> <b>THIS FIELD IS DEPRECATED AND NO LONGER SUPPORTED.</b> For sellers selling on the eBay France Marketplace, Extended Producer Responsibility ID fields are no longer set at the listing level. Instead, sellers must provide these IDs for each applicable category in their My eBay accounts. The URL will be based on the seller's home/registration site, and will use this pattern: https://accountsettings./epr-fr. Sellers based in the US will use <a href=\"https://accountsettings.ebay.com/epr-fr\" target=\"_blank\">https://accountsettings.ebay.com/epr-fr</a>, sellers based in France will use <a href=\"https://accountsettings.ebay.fr/epr-fr\" target=\"_blank\">https://accountsettings.ebay.fr/epr-fr</a>, and so on.</span>
     *
     * @return $this
     */
    public function setProductDocumentationId($product_documentation_id)
    {
        $this->container['product_documentation_id'] = $product_documentation_id;

        return $this;
    }

    /**
     * Gets product_package_id
     *
     * @return string
     */
    public function getProductPackageId()
    {
        return $this->container['product_package_id'];
    }

    /**
     * Sets product_package_id
     *
     * @param string $product_package_id <span class=\"tablenote\"><b>Note:</b> <b>THIS FIELD IS DEPRECATED AND NO LONGER SUPPORTED.</b> For sellers selling on the eBay France Marketplace, Extended Producer Responsibility ID fields are no longer set at the listing level. Instead, sellers must provide these IDs for each applicable category in their My eBay accounts. The URL will be based on the seller's home/registration site, and will use this pattern: https://accountsettings./epr-fr. Sellers based in the US will use <a href=\"https://accountsettings.ebay.com/epr-fr\" target=\"_blank\">https://accountsettings.ebay.com/epr-fr</a>, sellers based in France will use <a href=\"https://accountsettings.ebay.fr/epr-fr\" target=\"_blank\">https://accountsettings.ebay.fr/epr-fr</a>, and so on.</span>
     *
     * @return $this
     */
    public function setProductPackageId($product_package_id)
    {
        $this->container['product_package_id'] = $product_package_id;

        return $this;
    }

    /**
     * Gets shipment_package_id
     *
     * @return string
     */
    public function getShipmentPackageId()
    {
        return $this->container['shipment_package_id'];
    }

    /**
     * Sets shipment_package_id
     *
     * @param string $shipment_package_id <span class=\"tablenote\"><b>Note:</b> <b>THIS FIELD IS DEPRECATED AND NO LONGER SUPPORTED.</b> For sellers selling on the eBay France Marketplace, Extended Producer Responsibility ID fields are no longer set at the listing level. Instead, sellers must provide these IDs for each applicable category in their My eBay accounts. The URL will be based on the seller's home/registration site, and will use this pattern: https://accountsettings./epr-fr. Sellers based in the US will use <a href=\"https://accountsettings.ebay.com/epr-fr\" target=\"_blank\">https://accountsettings.ebay.com/epr-fr</a>, sellers based in France will use <a href=\"https://accountsettings.ebay.fr/epr-fr\" target=\"_blank\">https://accountsettings.ebay.fr/epr-fr</a>, and so on.</span>
     *
     * @return $this
     */
    public function setShipmentPackageId($shipment_package_id)
    {
        $this->container['shipment_package_id'] = $shipment_package_id;

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
