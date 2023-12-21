# ShipToLocationAvailability

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**availability_distributions** | [**\Ebay\Sell\Inventory\Model\AvailabilityDistribution[]**](AvailabilityDistribution.md) | This container is used to set the available quantity of the inventory item at one or more warehouse locations.&lt;br&gt;&lt;br&gt; This container will be returned if available quantity is set for one or more inventory locations. | [optional] 
**quantity** | **int** | This container is used to set the total &#x27;ship-to-home&#x27; quantity of the inventory item that will be available for purchase through one or more published offers. This container is not immediately required, but &#x27;ship-to-home&#x27; quantity must be set before an offer of the inventory item can be published.&lt;br&gt;&lt;br&gt;If an existing inventory item is being updated, and the &#x27;ship-to-home&#x27; quantity already exists for the inventory item record, this container should be included again, even if the value is not changing, or the available quantity data will be lost. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

