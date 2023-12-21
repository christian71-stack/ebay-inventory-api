<?php
/**
 * InventoryItemWithSkuLocaleGroupKeys
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
 * InventoryItemWithSkuLocaleGroupKeys Class Doc Comment
 *
 * @category Class
 * @description This type is used to provide details about each retrieved inventory item record.
 * @package  Ebay\Sell\Inventory
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventoryItemWithSkuLocaleGroupKeys implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InventoryItemWithSkuLocaleGroupKeys';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'availability' => '\Ebay\Sell\Inventory\Model\AvailabilityWithAll',
        'condition' => 'string',
        'condition_description' => 'string',
        'condition_descriptors' => '\Ebay\Sell\Inventory\Model\ConditionDescriptor[]',
        'inventory_item_group_keys' => 'string[]',
        'locale' => 'string',
        'package_weight_and_size' => '\Ebay\Sell\Inventory\Model\PackageWeightAndSize',
        'product' => '\Ebay\Sell\Inventory\Model\Product',
        'sku' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'availability' => null,
        'condition' => null,
        'condition_description' => null,
        'condition_descriptors' => null,
        'inventory_item_group_keys' => null,
        'locale' => null,
        'package_weight_and_size' => null,
        'product' => null,
        'sku' => null
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
        'availability' => 'availability',
        'condition' => 'condition',
        'condition_description' => 'conditionDescription',
        'condition_descriptors' => 'conditionDescriptors',
        'inventory_item_group_keys' => 'inventoryItemGroupKeys',
        'locale' => 'locale',
        'package_weight_and_size' => 'packageWeightAndSize',
        'product' => 'product',
        'sku' => 'sku'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'availability' => 'setAvailability',
        'condition' => 'setCondition',
        'condition_description' => 'setConditionDescription',
        'condition_descriptors' => 'setConditionDescriptors',
        'inventory_item_group_keys' => 'setInventoryItemGroupKeys',
        'locale' => 'setLocale',
        'package_weight_and_size' => 'setPackageWeightAndSize',
        'product' => 'setProduct',
        'sku' => 'setSku'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'availability' => 'getAvailability',
        'condition' => 'getCondition',
        'condition_description' => 'getConditionDescription',
        'condition_descriptors' => 'getConditionDescriptors',
        'inventory_item_group_keys' => 'getInventoryItemGroupKeys',
        'locale' => 'getLocale',
        'package_weight_and_size' => 'getPackageWeightAndSize',
        'product' => 'getProduct',
        'sku' => 'getSku'
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
        $this->container['availability'] = isset($data['availability']) ? $data['availability'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['condition_description'] = isset($data['condition_description']) ? $data['condition_description'] : null;
        $this->container['condition_descriptors'] = isset($data['condition_descriptors']) ? $data['condition_descriptors'] : null;
        $this->container['inventory_item_group_keys'] = isset($data['inventory_item_group_keys']) ? $data['inventory_item_group_keys'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['package_weight_and_size'] = isset($data['package_weight_and_size']) ? $data['package_weight_and_size'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
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
     * Gets availability
     *
     * @return \Ebay\Sell\Inventory\Model\AvailabilityWithAll
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     *
     * @param \Ebay\Sell\Inventory\Model\AvailabilityWithAll $availability availability
     *
     * @return $this
     */
    public function setAvailability($availability)
    {
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string $condition This enumeration value indicates the condition of the item. Supported item condition values will vary by eBay site and category. <br><br> Since the condition of an inventory item must be specified before being published in an offer, this field is always returned in the 'Get' calls for SKUs that are part of a published offer. If a SKU is not part of a published offer, this field will only be returned if set for the inventory item.<br><br> <span class=\"tablenote\"> <strong>Note:</strong> The 'Manufacturer Refurbished' item condition is no longer a valid item condition on any eBay marketplace, and to reflect this change, the <code>MANUFACTURER_REFURBISHED</code> value has essentially been replaced with the <code>CERTIFIED_REFURBISHED</code> enumeration value with Version 1.13.0. For any existing inventory items that have <code>MANUFACTURER_REFURBISHED</code> set as their <strong>condition</strong> value, eBay will automatically convert the condition of these inventory items to <code>CERTIFIED_REFURBISHED</code>, so it is not necessary for the developer to update these inventory items with a 'create or replace' call. <br><br> To list an item as 'Certified Refurbished', a seller must be pre-qualified by eBay for this feature. Any seller who is not eligible for this feature will be blocked if they try to create a new listing or revise an existing listing with this item condition. <br><br> Any seller that is interested in eligibility requirements to list with 'Certified Refurbished' should see the <a href=\"https://pages.ebay.com/seller-center/listing-and-marketing/certified-refurbished-program.html \" target=\"_blank\">Certified refurbished program</a> page in Seller Center. </span><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span>For trading card listings in Non-Sport Trading Card Singles (183050), CCG Individual Cards (183454), and Sports Trading Card Singles (261328) categories, LIKE_NEW (2750) can be used to specify the card as a Graded card and USED_VERY_GOOD (4000) can be used to specify the card as an Ungraded card. If either of these item conditions are used for the affected categories, the seller is then required to use the conditionDescriptors array to provide one or more applicable Condition Descriptor name-value pairs. See the conditionDescriptors field description for more information.</p><p>Beginning October 23, 2023, trading card listings in the affected categories must use either LIKE_NEW (2750) or USED_VERY_GOOD (4000) item condition, and no other item conditions will be accepted. These item conditions and the  conditionDescriptors array will be required for all new listings. If not provided after this date, the publishOffer, bulkPublishOffer, and publishOfferByInventoryItemGroup methods will fail when trying to create new listings.</p><p>By January 22 2024, all existing listings must be modified with either LIKE_NEW (2750) or USED_VERY_GOOD (4000) item condition and applicable conditionDescriptors name-value pairs. The updateOffer method will fail if the inventory item object does not have one of these two item conditions along with applicable conditionDescriptors name-value pairs.</p></span></div> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ConditionEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets condition_description
     *
     * @return string
     */
    public function getConditionDescription()
    {
        return $this->container['condition_description'];
    }

    /**
     * Sets condition_description
     *
     * @param string $condition_description This string field is used by the seller to more clearly describe the condition of used items, or items that are not 'Brand New', 'New with tags', or 'New in box'. The ConditionDescription field is available for all categories. If the ConditionDescription field is used with an item in a new condition (Condition IDs 1000-1499), eBay will simply ignore this field if included, and eBay will return a warning message to the user. This field should only be used to further clarify the condition of the used item. It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the item. Make sure that the condition value, condition description, listing description, and the item's pictures do not contradict one another.Max length: 1000.
     *
     * @return $this
     */
    public function setConditionDescription($condition_description)
    {
        $this->container['condition_description'] = $condition_description;

        return $this;
    }

    /**
     * Gets condition_descriptors
     *
     * @return \Ebay\Sell\Inventory\Model\ConditionDescriptor[]
     */
    public function getConditionDescriptors()
    {
        return $this->container['condition_descriptors'];
    }

    /**
     * Sets condition_descriptors
     *
     * @param \Ebay\Sell\Inventory\Model\ConditionDescriptor[] $condition_descriptors <div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span>For trading card listings in Non-Sport Trading Card Singles (183050), CCG Individual Cards (183454), and Sports Trading Card Singles (261328) categories, LIKE_NEW (2750) can be used to specify the card as a Graded card and USED_VERY_GOOD (4000) can be used to specify the card as an Ungraded card. If either of these item conditions are used for the affected categories, the seller is then required to use the conditionDescriptors array to provide one or more applicable Condition Descriptor name-value pairs.</p><p>Beginning October 23, 2023, trading card listings in the affected categories must use either LIKE_NEW (2750) or USED_VERY_GOOD (4000) item condition, and no other item conditions will be accepted. These item conditions and the  conditionDescriptors array will be required for all new listings. If not provided after this date, the publishOffer, bulkPublishOffer, and publishOfferByInventoryItemGroup methods will fail when trying to create new listings.</p><p>By January 22 2024, all existing listings must be modified with either LIKE_NEW (2750) or USED_VERY_GOOD (4000) item condition and applicable conditionDescriptors name-value pairs. The updateOffer method will fail if the inventory item object does not have one of these two item conditions along with applicable conditionDescriptors name-value pairs.</p></span></div><br><br>This container is used by the seller to provide additional information about the condition of an item in a structured format. Descriptors are name-value attributes that can be either closed set or open text. <br><br> For more information on the numeric IDs and their text equivalents, use the <a href=\"/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies\" target=\"_blank\">getItemConditionPolicies</a> method of the Metadata API. <br><br>
     *
     * @return $this
     */
    public function setConditionDescriptors($condition_descriptors)
    {
        $this->container['condition_descriptors'] = $condition_descriptors;

        return $this;
    }

    /**
     * Gets inventory_item_group_keys
     *
     * @return string[]
     */
    public function getInventoryItemGroupKeys()
    {
        return $this->container['inventory_item_group_keys'];
    }

    /**
     * Sets inventory_item_group_keys
     *
     * @param string[] $inventory_item_group_keys This array is returned if the inventory item is associated with any inventory item group(s). The value(s) returned in this array are the unique identifier(s) of the inventory item's variation in a multiple-variation listing. This array is not returned if the inventory item is not associated with any inventory item groups.
     *
     * @return $this
     */
    public function setInventoryItemGroupKeys($inventory_item_group_keys)
    {
        $this->container['inventory_item_group_keys'] = $inventory_item_group_keys;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale This field returns the natural language that was provided in the field values of the request payload (i.e., en_AU, en_GB or de_DE). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:LocaleEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets package_weight_and_size
     *
     * @return \Ebay\Sell\Inventory\Model\PackageWeightAndSize
     */
    public function getPackageWeightAndSize()
    {
        return $this->container['package_weight_and_size'];
    }

    /**
     * Sets package_weight_and_size
     *
     * @param \Ebay\Sell\Inventory\Model\PackageWeightAndSize $package_weight_and_size package_weight_and_size
     *
     * @return $this
     */
    public function setPackageWeightAndSize($package_weight_and_size)
    {
        $this->container['package_weight_and_size'] = $package_weight_and_size;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \Ebay\Sell\Inventory\Model\Product
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \Ebay\Sell\Inventory\Model\Product $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller should have a unique SKU value for every product that they sell.
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

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
