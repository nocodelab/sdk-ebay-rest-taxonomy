# # AspectConstraint

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aspectApplicableTo** | **string[]** | This value indicate if the aspect identified by the aspects.localizedAspectName field is a product aspect (relevant to catalog products in the category) or an item/instance aspect, which is an aspect whose value will vary based on a particular instance of the product. | [optional]
**aspectDataType** | **string** | The data type of this aspect. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectDataTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**aspectEnabledForVariations** | **bool** | A value of true indicates that this aspect can be used to help identify item variations. | [optional]
**aspectFormat** | **string** | Returned only if the value of aspectDataType identifies a data type that requires specific formatting. Currently, this field provides formatting hints as follows: DATE: YYYY, YYYYMM, YYYYMMDD NUMBER: int32, double | [optional]
**aspectMaxLength** | **int** | The maximum length of the item/instance aspect&#39;s value. The seller must make sure not to exceed this length when specifying the instance aspect&#39;s value for a product. This field is only returned for instance aspects. | [optional]
**aspectMode** | **string** | The manner in which values of this aspect must be specified by the seller (as free text or by selecting from available options). For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectModeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**aspectRequired** | **bool** | A value of true indicates that this aspect is required when offering items in the specified category. | [optional]
**aspectUsage** | **string** | The enumeration value returned in this field will indicate if the corresponding aspect is recommended or optional. Note: This field is always returned, even for hard-mandated/required aspects (where aspectRequired: true). The value returned for required aspects will be RECOMMENDED, but they are actually required and a seller will be blocked from listing or revising an item without these aspects. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectUsageEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**expectedRequiredByDate** | **string** | The expected date after which the aspect will be required. Note: The value returned in this field specifies only an approximate date, which may not reflect the actual date after which the aspect is required. | [optional]
**itemToAspectCardinality** | **string** | Indicates whether this aspect can accept single or multiple values for items in the specified category. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:ItemToAspectCardinalityEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
