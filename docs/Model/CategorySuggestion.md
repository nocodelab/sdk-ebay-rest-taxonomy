# # CategorySuggestion

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | [**\macropage\SDKs\ebay\rest\taxonomy\Model\Category**](Category.md) |  | [optional]
**categoryTreeNodeAncestors** | [**\macropage\SDKs\ebay\rest\taxonomy\Model\AncestorReference[]**](AncestorReference.md) | An ordered list of category references that describes the location of the suggested category in the specified category tree. The list identifies the category&#39;s ancestry as a sequence of parent nodes, from the current node&#39;s immediate parent to the root node of the category tree. Note: The root node of a full default category tree includes categoryId and categoryName fields, but their values should not be relied upon. They provide no useful information for application development. | [optional]
**categoryTreeNodeLevel** | **int** | The absolute level of the category tree node in the hierarchy of its category tree. Note: The root node of any full category tree is always at level 0. | [optional]
**relevancy** | **string** | This field is reserved for internal or future use. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
