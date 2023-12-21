# Regulatory

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**energy_efficiency_label** | [**\Ebay\Sell\Inventory\Model\EnergyEfficiencyLabel**](EnergyEfficiencyLabel.md) |  | [optional] 
**hazmat** | [**\Ebay\Sell\Inventory\Model\Hazmat**](Hazmat.md) |  | [optional] 
**repair_score** | **float** | This field represents the repair index for the listing.&lt;br&gt;&lt;br&gt;The repair index identifies the manufacturer&#x27;s repair score for a product (i.e., how easy is it to repair the product.) This field is a floating point value between 0.0 (i.e., difficult to repair,) and 10.0 (i.e., easily repaired.)&lt;br&gt;&lt;br&gt;The format for &lt;b&gt;repairScore&lt;/b&gt; is limited to one decimal place. For example:&lt;ul&gt;&lt;li&gt;&lt;code&gt;7.9&lt;/code&gt; and &lt;code&gt;0.0&lt;/code&gt; are both valid scores&lt;/li&gt;&lt;li&gt;&lt;code&gt;5.645&lt;/code&gt; and &lt;code&gt;2.10&lt;/code&gt; are both invalid scores&lt;/li&gt;&lt;/ul&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; Repair score is not applicable to all categories. Use the &lt;a href&#x3D;\&quot;/api-docs/sell/metadata/resources/marketplace/methods/getExtendedProducerResponsibilityPolicies\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getExtendedProducerResponsibilityPolicies&lt;/a&gt; method of the &lt;b&gt;Metadata API&lt;/b&gt; to see where repair score is applicable.&lt;/span&gt; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

