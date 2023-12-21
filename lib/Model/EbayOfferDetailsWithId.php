<?php
/**
 * EbayOfferDetailsWithId
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
 * EbayOfferDetailsWithId Class Doc Comment
 *
 * @category Class
 * @description &lt;This type provides details of an offer, and is used by the base request payload of the &lt;strong&gt;updateOffer&lt;/strong&gt; call. Every field that is currently set with the unpublished/published offer must also be passed into the &lt;strong&gt;updateOffer&lt;/strong&gt; call, even those fields whose values are not changing. Note that for published offers, a successful &lt;strong&gt;updateOffer&lt;/strong&gt; call will actually update the active eBay listing with whatever changes were made.
 * @package  Ebay\Sell\Inventory
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EbayOfferDetailsWithId implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EbayOfferDetailsWithId';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'available_quantity' => 'int',
        'category_id' => 'string',
        'charity' => '\Ebay\Sell\Inventory\Model\Charity',
        'extended_producer_responsibility' => '\Ebay\Sell\Inventory\Model\ExtendedProducerResponsibility',
        'hide_buyer_details' => 'bool',
        'include_catalog_product_details' => 'bool',
        'listing_description' => 'string',
        'listing_duration' => 'string',
        'listing_policies' => '\Ebay\Sell\Inventory\Model\ListingPolicies',
        'listing_start_date' => 'string',
        'lot_size' => 'int',
        'merchant_location_key' => 'string',
        'pricing_summary' => '\Ebay\Sell\Inventory\Model\PricingSummary',
        'quantity_limit_per_buyer' => 'int',
        'regulatory' => '\Ebay\Sell\Inventory\Model\Regulatory',
        'secondary_category_id' => 'string',
        'store_category_names' => 'string[]',
        'tax' => '\Ebay\Sell\Inventory\Model\Tax'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'available_quantity' => 'int32',
        'category_id' => null,
        'charity' => null,
        'extended_producer_responsibility' => null,
        'hide_buyer_details' => null,
        'include_catalog_product_details' => null,
        'listing_description' => null,
        'listing_duration' => null,
        'listing_policies' => null,
        'listing_start_date' => null,
        'lot_size' => 'int32',
        'merchant_location_key' => null,
        'pricing_summary' => null,
        'quantity_limit_per_buyer' => 'int32',
        'regulatory' => null,
        'secondary_category_id' => null,
        'store_category_names' => null,
        'tax' => null
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
        'available_quantity' => 'availableQuantity',
        'category_id' => 'categoryId',
        'charity' => 'charity',
        'extended_producer_responsibility' => 'extendedProducerResponsibility',
        'hide_buyer_details' => 'hideBuyerDetails',
        'include_catalog_product_details' => 'includeCatalogProductDetails',
        'listing_description' => 'listingDescription',
        'listing_duration' => 'listingDuration',
        'listing_policies' => 'listingPolicies',
        'listing_start_date' => 'listingStartDate',
        'lot_size' => 'lotSize',
        'merchant_location_key' => 'merchantLocationKey',
        'pricing_summary' => 'pricingSummary',
        'quantity_limit_per_buyer' => 'quantityLimitPerBuyer',
        'regulatory' => 'regulatory',
        'secondary_category_id' => 'secondaryCategoryId',
        'store_category_names' => 'storeCategoryNames',
        'tax' => 'tax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available_quantity' => 'setAvailableQuantity',
        'category_id' => 'setCategoryId',
        'charity' => 'setCharity',
        'extended_producer_responsibility' => 'setExtendedProducerResponsibility',
        'hide_buyer_details' => 'setHideBuyerDetails',
        'include_catalog_product_details' => 'setIncludeCatalogProductDetails',
        'listing_description' => 'setListingDescription',
        'listing_duration' => 'setListingDuration',
        'listing_policies' => 'setListingPolicies',
        'listing_start_date' => 'setListingStartDate',
        'lot_size' => 'setLotSize',
        'merchant_location_key' => 'setMerchantLocationKey',
        'pricing_summary' => 'setPricingSummary',
        'quantity_limit_per_buyer' => 'setQuantityLimitPerBuyer',
        'regulatory' => 'setRegulatory',
        'secondary_category_id' => 'setSecondaryCategoryId',
        'store_category_names' => 'setStoreCategoryNames',
        'tax' => 'setTax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available_quantity' => 'getAvailableQuantity',
        'category_id' => 'getCategoryId',
        'charity' => 'getCharity',
        'extended_producer_responsibility' => 'getExtendedProducerResponsibility',
        'hide_buyer_details' => 'getHideBuyerDetails',
        'include_catalog_product_details' => 'getIncludeCatalogProductDetails',
        'listing_description' => 'getListingDescription',
        'listing_duration' => 'getListingDuration',
        'listing_policies' => 'getListingPolicies',
        'listing_start_date' => 'getListingStartDate',
        'lot_size' => 'getLotSize',
        'merchant_location_key' => 'getMerchantLocationKey',
        'pricing_summary' => 'getPricingSummary',
        'quantity_limit_per_buyer' => 'getQuantityLimitPerBuyer',
        'regulatory' => 'getRegulatory',
        'secondary_category_id' => 'getSecondaryCategoryId',
        'store_category_names' => 'getStoreCategoryNames',
        'tax' => 'getTax'
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
        $this->container['available_quantity'] = isset($data['available_quantity']) ? $data['available_quantity'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['charity'] = isset($data['charity']) ? $data['charity'] : null;
        $this->container['extended_producer_responsibility'] = isset($data['extended_producer_responsibility']) ? $data['extended_producer_responsibility'] : null;
        $this->container['hide_buyer_details'] = isset($data['hide_buyer_details']) ? $data['hide_buyer_details'] : null;
        $this->container['include_catalog_product_details'] = isset($data['include_catalog_product_details']) ? $data['include_catalog_product_details'] : null;
        $this->container['listing_description'] = isset($data['listing_description']) ? $data['listing_description'] : null;
        $this->container['listing_duration'] = isset($data['listing_duration']) ? $data['listing_duration'] : null;
        $this->container['listing_policies'] = isset($data['listing_policies']) ? $data['listing_policies'] : null;
        $this->container['listing_start_date'] = isset($data['listing_start_date']) ? $data['listing_start_date'] : null;
        $this->container['lot_size'] = isset($data['lot_size']) ? $data['lot_size'] : null;
        $this->container['merchant_location_key'] = isset($data['merchant_location_key']) ? $data['merchant_location_key'] : null;
        $this->container['pricing_summary'] = isset($data['pricing_summary']) ? $data['pricing_summary'] : null;
        $this->container['quantity_limit_per_buyer'] = isset($data['quantity_limit_per_buyer']) ? $data['quantity_limit_per_buyer'] : null;
        $this->container['regulatory'] = isset($data['regulatory']) ? $data['regulatory'] : null;
        $this->container['secondary_category_id'] = isset($data['secondary_category_id']) ? $data['secondary_category_id'] : null;
        $this->container['store_category_names'] = isset($data['store_category_names']) ? $data['store_category_names'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
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
     * Gets available_quantity
     *
     * @return int
     */
    public function getAvailableQuantity()
    {
        return $this->container['available_quantity'];
    }

    /**
     * Sets available_quantity
     *
     * @param int $available_quantity This integer value sets the quantity of the inventory item that will be available through the offer. Quantity must be set to <code>1</code> or more in order for the inventory item to be purchasable. This value should not be more than the quantity that is specified for the inventory item record. For auction listings, this value must be <code>1</code>. <br><br>If this field exists for the current unpublished or published offer, it should be provided again in the <strong>updateOffer</strong> call, even if the value is not changing. If this particular field is omitted in an <strong>updateOffer</strong> call, the general available quantity set for the inventory item record may be used instead, and this may not be accurate if the inventory item is being sold across multiple marketplaces.
     *
     * @return $this
     */
    public function setAvailableQuantity($available_quantity)
    {
        $this->container['available_quantity'] = $available_quantity;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string $category_id The unique identifier of the eBay category that the inventory item is/will be listed under. This field is not immediately required for an unpublished offer, but will be required before publishing the offer. Sellers can use the <a href=\"/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategorySuggestions \" target=\"_blank\">getCategorySuggestions</a> method of the Taxonomy API to retrieve suggested category ID values. The seller passes in a query string like \"<em>iPhone 6</em>\", and category ID values for suggested categories are returned in the response.<br><br>If this field exists for the current unpublished offer, it should be provided again in the <strong>updateOffer</strong> call, even if the eBay category is not changing. For a published offer (aka active eBay listing), this field must be provided or an error may occur. The eBay category of an active eBay listing cannot be changed once the listing has one or more sales, or if the listing is scheduled to end in less than 12 hours.
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets charity
     *
     * @return \Ebay\Sell\Inventory\Model\Charity
     */
    public function getCharity()
    {
        return $this->container['charity'];
    }

    /**
     * Sets charity
     *
     * @param \Ebay\Sell\Inventory\Model\Charity $charity charity
     *
     * @return $this
     */
    public function setCharity($charity)
    {
        $this->container['charity'] = $charity;

        return $this;
    }

    /**
     * Gets extended_producer_responsibility
     *
     * @return \Ebay\Sell\Inventory\Model\ExtendedProducerResponsibility
     */
    public function getExtendedProducerResponsibility()
    {
        return $this->container['extended_producer_responsibility'];
    }

    /**
     * Sets extended_producer_responsibility
     *
     * @param \Ebay\Sell\Inventory\Model\ExtendedProducerResponsibility $extended_producer_responsibility extended_producer_responsibility
     *
     * @return $this
     */
    public function setExtendedProducerResponsibility($extended_producer_responsibility)
    {
        $this->container['extended_producer_responsibility'] = $extended_producer_responsibility;

        return $this;
    }

    /**
     * Gets hide_buyer_details
     *
     * @return bool
     */
    public function getHideBuyerDetails()
    {
        return $this->container['hide_buyer_details'];
    }

    /**
     * Sets hide_buyer_details
     *
     * @param bool $hide_buyer_details This field is included and set to <code>true</code> if the seller wishes to update a published or unpublished offer with the private listing feature. Alternatively, the seller could also remove the private listing feature (if already set for a published or unpublished offer) by including this field and setting it to <code>false</code>. <br><br> Sellers may want to use this option when they believe that a listing's potential bidders/buyers would not want their obfuscated user IDs (and feedback scores) exposed to other users.
     *
     * @return $this
     */
    public function setHideBuyerDetails($hide_buyer_details)
    {
        $this->container['hide_buyer_details'] = $hide_buyer_details;

        return $this;
    }

    /**
     * Gets include_catalog_product_details
     *
     * @return bool
     */
    public function getIncludeCatalogProductDetails()
    {
        return $this->container['include_catalog_product_details'];
    }

    /**
     * Sets include_catalog_product_details
     *
     * @param bool $include_catalog_product_details This field indicates whether or not eBay product catalog details are applied to a listing. A value of <code>true</code> indicates the listing corresponds to the eBay product associated with the provided product identifier. The product identifier is provided in <strong>createOrReplaceInventoryItem</strong>.<p><span class=\"tablenote\"><strong>Note:</strong> Though the <strong>includeCatalogProductDetails</strong> parameter is not required to be submitted in the request, the parameter defaults to 'true' if omitted.</span></p>
     *
     * @return $this
     */
    public function setIncludeCatalogProductDetails($include_catalog_product_details)
    {
        $this->container['include_catalog_product_details'] = $include_catalog_product_details;

        return $this;
    }

    /**
     * Gets listing_description
     *
     * @return string
     */
    public function getListingDescription()
    {
        return $this->container['listing_description'];
    }

    /**
     * Sets listing_description
     *
     * @param string $listing_description The text in this field is (published offers), or will become (unpublished offers) the description of the eBay listing. This field is not immediately required for an unpublished offer, but will be required before publishing the offer. Note that if the <strong>listingDescription</strong> field was omitted in the <strong>createOffer</strong> call for the offer, the offer entity should have picked up the text provided in the <strong>product.description</strong> field of the inventory item record, or if the inventory item is part of a group, the offer entity should have picked up the text provided in the <strong>description</strong> field of the inventory item group record.<br><br>HTML tags and markup can be used in listing descriptions, but each character counts toward the max length limit.<br><br><span class=\"tablenote\"> <strong>Note:</strong> To ensure that their short listing description is optimized when viewed on mobile devices, sellers should strongly consider using eBay's <a href=\"https://pages.ebay.com/sell/itemdescription/customizeyoursummary.html \" target=\"_blank\">View Item description summary feature</a> when listing their items. Keep in mind that the 'short' listing description is what prospective buyers first see when they view the listing on a mobile device. The 'full' listing description is also available to mobile users when they click on the short listing description, but the full description is not automatically optimized for viewing in mobile devices, and many users won't even drill down to the full description.<br><br> Using HTML div and span tag attributes, this feature allows sellers to customize and fully control the short listing description that is displayed to prospective buyers when viewing the listing on a mobile device. The short listing description on mobile devices is limited to 800 characters, and whenever the full listing description (provided in this field, in UI, or seller tool) exceeds this limit, eBay uses a special algorithm to derive the best possible short listing description within the 800-character limit. However, due to some short listing description content being removed, it is definitely not ideal for the seller, and could lead to a bad buyer experience and possibly to a Significantly not as described (SNAD) case, since the buyer may not get complete details on the item when viewing the short listing description. See the eBay help page for more details on using the HTML div and span tags.</span><br><br>If this field exists for the current unpublished offer, it should be provided again in the <strong>updateOffer</strong> call, even if the text is not changing. For a published offer (aka active eBay listing), this field must be provided or an error may occur.<br><br><strong>Max length</strong>: 500000 (which includes HTML markup/tags)
     *
     * @return $this
     */
    public function setListingDescription($listing_description)
    {
        $this->container['listing_description'] = $listing_description;

        return $this;
    }

    /**
     * Gets listing_duration
     *
     * @return string
     */
    public function getListingDuration()
    {
        return $this->container['listing_duration'];
    }

    /**
     * Sets listing_duration
     *
     * @param string $listing_duration This field indicates the number of days that the listing will be active. For fixed-price listings, this value must be set to <code>GTC</code>, but auction listings support different listing durations.<br><br> The GTC (Good 'Til Cancelled) listings are automatically renewed each calendar month until the seller decides to end the listing.<br><br><span class=\"tablenote\"> <strong>Note:</strong> If the listing duration expires for an auction offer without a winning bidder, the listing then becomes available as a fixed-price offer and listing duration will be <code>GTC</code>.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ListingDurationEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setListingDuration($listing_duration)
    {
        $this->container['listing_duration'] = $listing_duration;

        return $this;
    }

    /**
     * Gets listing_policies
     *
     * @return \Ebay\Sell\Inventory\Model\ListingPolicies
     */
    public function getListingPolicies()
    {
        return $this->container['listing_policies'];
    }

    /**
     * Sets listing_policies
     *
     * @param \Ebay\Sell\Inventory\Model\ListingPolicies $listing_policies listing_policies
     *
     * @return $this
     */
    public function setListingPolicies($listing_policies)
    {
        $this->container['listing_policies'] = $listing_policies;

        return $this;
    }

    /**
     * Gets listing_start_date
     *
     * @return string
     */
    public function getListingStartDate()
    {
        return $this->container['listing_start_date'];
    }

    /**
     * Sets listing_start_date
     *
     * @param string $listing_start_date This field can be used with an unpublished offer if the seller wants to specify a time in the future that the listing will become active on eBay. The timestamp supplied in this field should be in UTC format, and it should be far enough in the future so that the seller will have enough time to publish the listing with the <strong>publishOffer</strong> method.<br><br> For example: 2023-05-30T19:08:00Z.<br><br> This field is optional, and it doesn't apply to offers where the corresponding listing is already active. If this field is not provided, the listing starts immediately after a successful <strong>publishOffer</strong> method.
     *
     * @return $this
     */
    public function setListingStartDate($listing_start_date)
    {
        $this->container['listing_start_date'] = $listing_start_date;

        return $this;
    }

    /**
     * Gets lot_size
     *
     * @return int
     */
    public function getLotSize()
    {
        return $this->container['lot_size'];
    }

    /**
     * Sets lot_size
     *
     * @param int $lot_size This field is only applicable if the listing is a lot listing. A lot listing is a listing that has multiple quantity of the same item, such as four identical tires being sold as a single offer, or it can be a mixed lot of similar items, such as used clothing items or an assortment of baseball cards. Whether the lot listing involved identical items or a mixed lot, the integer value passed into this field is the total number of items in the lot. Lots can be used for auction and fixed-price listings.
     *
     * @return $this
     */
    public function setLotSize($lot_size)
    {
        $this->container['lot_size'] = $lot_size;

        return $this;
    }

    /**
     * Gets merchant_location_key
     *
     * @return string
     */
    public function getMerchantLocationKey()
    {
        return $this->container['merchant_location_key'];
    }

    /**
     * Sets merchant_location_key
     *
     * @param string $merchant_location_key The unique identifier of a merchant's inventory location (where the inventory item in the offer is located).<br><br> To get more information about inventory locations, the <a href=\"/api-docs/sell/inventory/resources/location/methods/getInventoryLocations\" target=\"_blank\">getInventoryLocations</a> method can be used.br><br><span class=\"tablenote\"><b>Note:</b> This field is not initially required upon first creating an offer, but will become required before an offer can be published.</span><br><b>Max length</b>: 36
     *
     * @return $this
     */
    public function setMerchantLocationKey($merchant_location_key)
    {
        $this->container['merchant_location_key'] = $merchant_location_key;

        return $this;
    }

    /**
     * Gets pricing_summary
     *
     * @return \Ebay\Sell\Inventory\Model\PricingSummary
     */
    public function getPricingSummary()
    {
        return $this->container['pricing_summary'];
    }

    /**
     * Sets pricing_summary
     *
     * @param \Ebay\Sell\Inventory\Model\PricingSummary $pricing_summary pricing_summary
     *
     * @return $this
     */
    public function setPricingSummary($pricing_summary)
    {
        $this->container['pricing_summary'] = $pricing_summary;

        return $this;
    }

    /**
     * Gets quantity_limit_per_buyer
     *
     * @return int
     */
    public function getQuantityLimitPerBuyer()
    {
        return $this->container['quantity_limit_per_buyer'];
    }

    /**
     * Sets quantity_limit_per_buyer
     *
     * @param int $quantity_limit_per_buyer This field is only applicable and set if the seller wishes to set a restriction on the purchase quantity per seller. If this field is set by the seller for the offer, then each distinct buyer may purchase up to, but not exceeding the quantity specified for this field. So, if this field's value is <code>5</code>, each buyer may purchase between one to five of these products, and the purchases can occur in one multiple-quantity purchase, or over multiple transactions. If a buyer attempts to purchase one or more of these products, and the cumulative quantity will take the buyer beyond the quantity limit, that buyer will be blocked from that purchase.<br><br>If this field currently exists for an unpublished or published offer, it should be provided again in an <strong>updateOffer</strong> call, even if the value is not changing.<br>
     *
     * @return $this
     */
    public function setQuantityLimitPerBuyer($quantity_limit_per_buyer)
    {
        $this->container['quantity_limit_per_buyer'] = $quantity_limit_per_buyer;

        return $this;
    }

    /**
     * Gets regulatory
     *
     * @return \Ebay\Sell\Inventory\Model\Regulatory
     */
    public function getRegulatory()
    {
        return $this->container['regulatory'];
    }

    /**
     * Sets regulatory
     *
     * @param \Ebay\Sell\Inventory\Model\Regulatory $regulatory regulatory
     *
     * @return $this
     */
    public function setRegulatory($regulatory)
    {
        $this->container['regulatory'] = $regulatory;

        return $this;
    }

    /**
     * Gets secondary_category_id
     *
     * @return string
     */
    public function getSecondaryCategoryId()
    {
        return $this->container['secondary_category_id'];
    }

    /**
     * Sets secondary_category_id
     *
     * @param string $secondary_category_id The unique identifier for a secondary category. This field is applicable if the seller decides to list the item under two categories. Sellers can use the <a href=\"/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategorySuggestions\" target=\"_blank\">getCategorySuggestions</a> method of the Taxonomy API to retrieve suggested category ID values. A fee may be charged when adding a secondary category to a listing. <br><br><span class=\"tablenote\"><strong>Note:</strong> You cannot list <strong>US eBay Motors</strong> vehicles in two categories. However, you can list <strong>Parts & Accessories</strong> in two categories.</span>
     *
     * @return $this
     */
    public function setSecondaryCategoryId($secondary_category_id)
    {
        $this->container['secondary_category_id'] = $secondary_category_id;

        return $this;
    }

    /**
     * Gets store_category_names
     *
     * @return string[]
     */
    public function getStoreCategoryNames()
    {
        return $this->container['store_category_names'];
    }

    /**
     * Sets store_category_names
     *
     * @param string[] $store_category_names This container is used if the seller would like to place the inventory item into one or two store categories that the seller has set up for their eBay store. The string value(s) passed in to this container will be the full path(s) to the store categories, as shown below:<br> <pre><code>\"storeCategoryNames\": [<br> \"/Fashion/Men/Shirts\", <br> \"/Fashion/Men/Accessories\" ], </pre></code>If this field currently exists for an unpublished or published offer, it should be provided again in an <strong>updateOffer</strong> call, even if the eBay categories are not changing.
     *
     * @return $this
     */
    public function setStoreCategoryNames($store_category_names)
    {
        $this->container['store_category_names'] = $store_category_names;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \Ebay\Sell\Inventory\Model\Tax
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \Ebay\Sell\Inventory\Model\Tax $tax tax
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

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
