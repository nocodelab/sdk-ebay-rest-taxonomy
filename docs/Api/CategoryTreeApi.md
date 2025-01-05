# macropage\SDKs\ebay\rest\taxonomy\CategoryTreeApi

All URIs are relative to https://api.ebay.com/commerce/taxonomy/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fetchItemAspects()**](CategoryTreeApi.md#fetchItemAspects) | **GET** /category_tree/{category_tree_id}/fetch_item_aspects | Get Aspects for All Leaf Categories in a Marketplace |
| [**getCategorySubtree()**](CategoryTreeApi.md#getCategorySubtree) | **GET** /category_tree/{category_tree_id}/get_category_subtree | Get a Category Subtree |
| [**getCategorySuggestions()**](CategoryTreeApi.md#getCategorySuggestions) | **GET** /category_tree/{category_tree_id}/get_category_suggestions | Get Suggested Categories |
| [**getCategoryTree()**](CategoryTreeApi.md#getCategoryTree) | **GET** /category_tree/{category_tree_id} | Get a Category Tree |
| [**getCompatibilityProperties()**](CategoryTreeApi.md#getCompatibilityProperties) | **GET** /category_tree/{category_tree_id}/get_compatibility_properties | Get Compatibility Properties |
| [**getCompatibilityPropertyValues()**](CategoryTreeApi.md#getCompatibilityPropertyValues) | **GET** /category_tree/{category_tree_id}/get_compatibility_property_values | Get Compatibility Property Values |
| [**getDefaultCategoryTreeId()**](CategoryTreeApi.md#getDefaultCategoryTreeId) | **GET** /get_default_category_tree_id | Get a Default Category Tree ID |
| [**getExpiredCategories()**](CategoryTreeApi.md#getExpiredCategories) | **GET** /category_tree/{category_tree_id}/get_expired_categories |  |
| [**getItemAspectsForCategory()**](CategoryTreeApi.md#getItemAspectsForCategory) | **GET** /category_tree/{category_tree_id}/get_item_aspects_for_category |  |


## `fetchItemAspects()`

```php
fetchItemAspects($categoryTreeId): \macropage\SDKs\ebay\rest\taxonomy\Model\GetCategoriesAspectResponse
```

Get Aspects for All Leaf Categories in a Marketplace

This method returns a complete list of aspects for all of the leaf categories that belong to an eBay marketplace. The eBay marketplace is specified through the <b>category_tree_id</b> URI parameter.<br><br><span class=\"tablenote\"> <strong>Note:</strong> A successful call returns a payload as a gzipped JSON file sent as a binary file using the content-type:application/octet-stream in the response. This file may be large (over 100 MB, compressed). Extract the JSON file from the compressed file with a utility that handles .gz or .gzip. The open source <a href=\"https://github.com/eBay/taxonomy-sdk \" target=\"_blank\">Taxonomy SDK</a> can be used to compare the aspect metadata that is returned in this response. The <b>Taxonomy SDK</b> uses this call to surface changes (new, modified, and removed entities) between an updated version of a bulk downloaded file relative to a previous version.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\taxonomy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\taxonomy\Api\CategoryTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryTreeId = 'categoryTreeId_example'; // string | The unique identifier of the eBay category tree. The category tree ID for an eBay marketplace can be retrieved using the <b>getDefaultCategoryTreeId</b> method.

try {
    $result = $apiInstance->fetchItemAspects($categoryTreeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->fetchItemAspects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categoryTreeId** | **string**| The unique identifier of the eBay category tree. The category tree ID for an eBay marketplace can be retrieved using the &lt;b&gt;getDefaultCategoryTreeId&lt;/b&gt; method. | |

### Return type

[**\macropage\SDKs\ebay\rest\taxonomy\Model\GetCategoriesAspectResponse**](../Model/GetCategoriesAspectResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategorySubtree()`

```php
getCategorySubtree($categoryId, $categoryTreeId, $acceptEncoding): \macropage\SDKs\ebay\rest\taxonomy\Model\CategorySubtree
```

Get a Category Subtree

This call retrieves the details of all nodes of the category tree hierarchy (the subtree) below a specified category of a category tree. You identify the tree using the <b>category_tree_id</b> parameter, which was returned by the <b>getDefaultCategoryTreeId</b> call in the <b>categoryTreeId</b> field.<br><br><span class=\"tablenote\"> <strong>Note:</strong> This method can return a very large payload, so gzip compression is supported. To enable gzip compression, include the <code>Accept-Encoding</code> header and set its value to <code>gzip</code> as shown below: <br><br><code>&nbsp;&nbsp;Accept-Encoding: gzip</code></span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\taxonomy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\taxonomy\Api\CategoryTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryId = 'categoryId_example'; // string | The unique identifier of the category at the top of the subtree being requested. Metadata on this category and all its descendant categories are retrieved.<br><br><span class=\"tablenote\"><strong>Note:</strong> If the <b>category_id</b> submitted identifies a leaf node of the tree, the call response will contain information about only that leaf node, which is a valid subtree.<!-- <br><br> This call also returns an error if <b>category_id</b> identifies a deprecated category. This can occur if you routinely cache your category trees. Use the <b>Get Deprecated Categories and Mapping</b> call to determine which current category should be used in place of the deprecated category, and use the <b>getCategoryTree</b> call to update your cached copy of the tree. --> </span>
$categoryTreeId = 'categoryTreeId_example'; // string | The unique identifier of the eBay category tree. The category tree ID for an eBay marketplace can be retrieved using the <b>getDefaultCategoryTreeId</b> method.
$acceptEncoding = 'acceptEncoding_example'; // string | This header indicates the compression-encoding algorithms the client accepts for the response. This value should be set to <code>gzip</code>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.

try {
    $result = $apiInstance->getCategorySubtree($categoryId, $categoryTreeId, $acceptEncoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->getCategorySubtree: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categoryId** | **string**| The unique identifier of the category at the top of the subtree being requested. Metadata on this category and all its descendant categories are retrieved.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; If the &lt;b&gt;category_id&lt;/b&gt; submitted identifies a leaf node of the tree, the call response will contain information about only that leaf node, which is a valid subtree.&lt;!-- &lt;br&gt;&lt;br&gt; This call also returns an error if &lt;b&gt;category_id&lt;/b&gt; identifies a deprecated category. This can occur if you routinely cache your category trees. Use the &lt;b&gt;Get Deprecated Categories and Mapping&lt;/b&gt; call to determine which current category should be used in place of the deprecated category, and use the &lt;b&gt;getCategoryTree&lt;/b&gt; call to update your cached copy of the tree. --&gt; &lt;/span&gt; | |
| **categoryTreeId** | **string**| The unique identifier of the eBay category tree. The category tree ID for an eBay marketplace can be retrieved using the &lt;b&gt;getDefaultCategoryTreeId&lt;/b&gt; method. | |
| **acceptEncoding** | **string**| This header indicates the compression-encoding algorithms the client accepts for the response. This value should be set to &lt;code&gt;gzip&lt;/code&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | [optional] |

### Return type

[**\macropage\SDKs\ebay\rest\taxonomy\Model\CategorySubtree**](../Model/CategorySubtree.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategorySuggestions()`

```php
getCategorySuggestions($categoryTreeId, $q): \macropage\SDKs\ebay\rest\taxonomy\Model\CategorySuggestionResponse
```

Get Suggested Categories

This call returns an array of category tree leaf nodes in the specified category tree that are considered by eBay to most closely correspond to the query string <b>q</b>. Returned with each suggested node is a localized name for that category (based on the <b>Accept-Language</b> header specified for the call), and details about each of the category's ancestor nodes, extending from its immediate parent up to the root of the category tree.<br><br>You identify the tree using the <b>category_tree_id</b> parameter, which was returned by the <b>getDefaultCategoryTreeId</b> call in the <b>categoryTreeId</b> field.<br><br><span class=\"tablenote\"> <strong><span style=\"color:red\">Important:</span></strong> This call is not supported in the Sandbox environment. It will return a response payload in which the <b>categoryName</b> fields contain random or boilerplate text regardless of the query submitted.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\taxonomy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\taxonomy\Api\CategoryTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryTreeId = 'categoryTreeId_example'; // string | The unique identifier of the eBay category tree. The category tree ID for an eBay marketplace can be retrieved using the <b>getDefaultCategoryTreeId</b> method.
$q = 'q_example'; // string | A quoted string that describes or characterizes the item being offered for sale. The string format is free form, and can contain any combination of phrases or keywords. eBay will parse the string and return suggested categories for the item.

try {
    $result = $apiInstance->getCategorySuggestions($categoryTreeId, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->getCategorySuggestions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categoryTreeId** | **string**| The unique identifier of the eBay category tree. The category tree ID for an eBay marketplace can be retrieved using the &lt;b&gt;getDefaultCategoryTreeId&lt;/b&gt; method. | |
| **q** | **string**| A quoted string that describes or characterizes the item being offered for sale. The string format is free form, and can contain any combination of phrases or keywords. eBay will parse the string and return suggested categories for the item. | |

### Return type

[**\macropage\SDKs\ebay\rest\taxonomy\Model\CategorySuggestionResponse**](../Model/CategorySuggestionResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoryTree()`

```php
getCategoryTree($categoryTreeId, $acceptEncoding): \macropage\SDKs\ebay\rest\taxonomy\Model\CategoryTree
```

Get a Category Tree

This method retrieves the complete category tree that is identified by the <b>category_tree_id</b> parameter. The value of <b>category_tree_id</b> was returned by the <b>getDefaultCategoryTreeId</b> method in the <b>categoryTreeId</b> field. The response contains details of all nodes of the specified eBay category tree, as well as the eBay marketplaces that use this category tree.<br><br><span class=\"tablenote\"> <strong>Note:</strong> This method can return a very large payload, so gzip compression is supported. To enable gzip compression, include the <code>Accept-Encoding</code> header and set its value to <code>gzip</code> as shown below: <br><br><code>&nbsp;&nbsp;Accept-Encoding: gzip</code></span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\taxonomy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\taxonomy\Api\CategoryTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryTreeId = 'categoryTreeId_example'; // string | The unique identifier of the eBay category tree. The category tree ID for an eBay marketplace can be retrieved using the <b>getDefaultCategoryTreeId</b> method.
$acceptEncoding = 'acceptEncoding_example'; // string | This header indicates the compression-encoding algorithms the client accepts for the response. This value should be set to <code>gzip</code>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.

try {
    $result = $apiInstance->getCategoryTree($categoryTreeId, $acceptEncoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->getCategoryTree: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categoryTreeId** | **string**| The unique identifier of the eBay category tree. The category tree ID for an eBay marketplace can be retrieved using the &lt;b&gt;getDefaultCategoryTreeId&lt;/b&gt; method. | |
| **acceptEncoding** | **string**| This header indicates the compression-encoding algorithms the client accepts for the response. This value should be set to &lt;code&gt;gzip&lt;/code&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | [optional] |

### Return type

[**\macropage\SDKs\ebay\rest\taxonomy\Model\CategoryTree**](../Model/CategoryTree.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompatibilityProperties()`

```php
getCompatibilityProperties($categoryTreeId, $categoryId): \macropage\SDKs\ebay\rest\taxonomy\Model\GetCompatibilityMetadataResponse
```

Get Compatibility Properties

This call retrieves the compatible vehicle aspects that are used to define a motor vehicle that is compatible with a motor vehicle part or accessory. The values that are retrieved here might include motor vehicle aspects such as 'Make', 'Model', 'Year', 'Engine', and 'Trim', and each of these aspects are localized for the eBay marketplace.<br><br> The <strong>category_tree_id</strong> value is passed in as a path parameter, and this value identifies the eBay category tree. The <strong>category_id</strong> value is passed in as a query parameter, as this parameter is also required. The specified category must be a category that supports parts compatibility.<br><br> At this time, this operation only supports parts and accessories listings for cars, trucks, and motorcycles (not boats, power sports, or any other vehicle types). Only the following eBay marketplaces support parts compatibility:<ul><li>eBay US (Motors and non-Motors categories)</li><li>eBay Canada (Motors and non-Motors categories)</li><li>eBay UK</li><li>eBay Germany</li><li>eBay Australia</li><li>eBay France</li><li>eBay Italy</li><li>eBay Spain</li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\taxonomy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\taxonomy\Api\CategoryTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryTreeId = 'categoryTreeId_example'; // string | This is the unique identifier of category tree. The following is the list of <strong>category_tree_id</strong> values and the eBay marketplaces that they represent. One of these ID values must be passed in as a path parameter, and the <strong>category_id</strong> value, that is passed in as query parameter, must be a valid eBay category on that eBay marketplace that supports parts compatibility for cars, trucks, or motorcycles.<br><br><ul><li>eBay US: 0</li><li>eBay Motors US: 100</li><li>eBay Canada: 2</li><li>eBay UK: 3</li><li>eBay Germany: 77</li><li>eBay Australia: 15</li><li>eBay France: 71</li><li>eBay Italy: 101</li><li>eBay Spain: 186</li></ul>
$categoryId = 'categoryId_example'; // string | The unique identifier of an eBay category. This eBay category must be a valid eBay category on the specified eBay marketplace, and the category must support parts compatibility for cars, trucks, or motorcycles.<br><br> The <b>getAutomotivePartsCompatibilityPolicies</b> method of the Selling Metadata API can be used to retrieve all eBay categories for an eBay marketplace that support parts compatibility for vehicles.

try {
    $result = $apiInstance->getCompatibilityProperties($categoryTreeId, $categoryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->getCompatibilityProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categoryTreeId** | **string**| This is the unique identifier of category tree. The following is the list of &lt;strong&gt;category_tree_id&lt;/strong&gt; values and the eBay marketplaces that they represent. One of these ID values must be passed in as a path parameter, and the &lt;strong&gt;category_id&lt;/strong&gt; value, that is passed in as query parameter, must be a valid eBay category on that eBay marketplace that supports parts compatibility for cars, trucks, or motorcycles.&lt;br&gt;&lt;br&gt;&lt;ul&gt;&lt;li&gt;eBay US: 0&lt;/li&gt;&lt;li&gt;eBay Motors US: 100&lt;/li&gt;&lt;li&gt;eBay Canada: 2&lt;/li&gt;&lt;li&gt;eBay UK: 3&lt;/li&gt;&lt;li&gt;eBay Germany: 77&lt;/li&gt;&lt;li&gt;eBay Australia: 15&lt;/li&gt;&lt;li&gt;eBay France: 71&lt;/li&gt;&lt;li&gt;eBay Italy: 101&lt;/li&gt;&lt;li&gt;eBay Spain: 186&lt;/li&gt;&lt;/ul&gt; | |
| **categoryId** | **string**| The unique identifier of an eBay category. This eBay category must be a valid eBay category on the specified eBay marketplace, and the category must support parts compatibility for cars, trucks, or motorcycles.&lt;br&gt;&lt;br&gt; The &lt;b&gt;getAutomotivePartsCompatibilityPolicies&lt;/b&gt; method of the Selling Metadata API can be used to retrieve all eBay categories for an eBay marketplace that support parts compatibility for vehicles. | |

### Return type

[**\macropage\SDKs\ebay\rest\taxonomy\Model\GetCompatibilityMetadataResponse**](../Model/GetCompatibilityMetadataResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompatibilityPropertyValues()`

```php
getCompatibilityPropertyValues($categoryTreeId, $compatibilityProperty, $categoryId, $filter): \macropage\SDKs\ebay\rest\taxonomy\Model\GetCompatibilityPropertyValuesResponse
```

Get Compatibility Property Values

This call retrieves applicable compatible vehicle property values based on the specified eBay marketplace, specified eBay category, and filters used in the request. Compatible vehicle properties are returned in the <strong>compatibilityProperties.name</strong> field of a <strong>getCompatibilityProperties</strong> response. <br><br> One compatible vehicle property applicable to the specified eBay marketplace and eBay category is specified through the required <strong>compatibility_property</strong> filter. Then, the user has the option of further restricting the compatible vehicle property values that are returned in the response by specifying one or more compatible vehicle property name/value pairs through the <strong>filter</strong> query parameter.<br><br>See the documentation in <strong>URI parameters</strong> section for more information on using the <strong>compatibility_property</strong> and <strong>filter</strong> query parameters together to customize the data that is retrieved.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\taxonomy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\taxonomy\Api\CategoryTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryTreeId = 'categoryTreeId_example'; // string | This is the unique identifier of the category tree. The following is the list of <strong>category_tree_id</strong> values and the eBay marketplaces that they represent. One of these ID values must be passed in as a path parameter, and the <strong>category_id</strong> value, that is passed in as query parameter, must be a valid eBay category on that eBay marketplace that supports parts compatibility for cars, trucks, or motorcycles.<br><br><ul><li>eBay US: 0</li><li>eBay Motors US: 100</li><li>eBay Canada: 2</li><li>eBay UK: 3</li><li>eBay Germany: 77</li><li>eBay Australia: 15</li><li>eBay France: 71</li><li>eBay Italy: 101</li><li>eBay Spain: 186</li></ul>
$compatibilityProperty = 'compatibilityProperty_example'; // string | One compatible vehicle property applicable to the specified eBay marketplace and eBay category is specified in this required filter. Compatible vehicle properties are returned in the <strong>compatibilityProperties.name</strong> field of a <strong>getCompatibilityProperties</strong> response. <br><br> For example, if you wanted to retrieve all vehicle trims for a 2018 Toyota Camry, you would set this filter as follows: <code>compatibility_property=Trim</code> and then include the following three name/value filters through one <strong>filter</strong> parameter: <code>filter=Year:2018,Make:Toyota,Model:Camry</code>.<br><br>So, putting this all together, the URI would look something like this:<br><br><pre><code>GET https://api.ebay.com/commerce/<br>taxonomy/v1/category_tree/100/<br>get_compatibility_property_values?<br><strong>category_id</strong>=6016&<strong>compatibility_property</strong>=Trim<br>&<strong>filter</strong>=Year:2018,Make:Toyota,Model:Camry</code></pre>
$categoryId = 'categoryId_example'; // string | The unique identifier of an eBay category. This eBay category must be a valid eBay category on the specified eBay marketplace, and the category must support parts compatibility for cars, trucks, or motorcycles.<br><br> The <strong>getAutomotivePartsCompatibilityPolicies</strong> method of the Selling Metadata API can be used to retrieve all eBay categories for an eBay marketplace that support parts compatibility for vehicles.
$filter = 'filter_example'; // string | One or more compatible vehicle property name/value pairs are passed in through this query parameter. The compatible vehicle property name and corresponding value are delimited with a colon (:), such as <code>filter=Year:2018</code>, and multiple compatible vehicle property name/value pairs are delimited with a comma (,).<br><br><span class=\"tablenote\"><b>Note:</b> Commas are used as delimiters between filter values. If a value includes a comma (e.g., <code>BodyStyle:AWD B9 8W5<b>,</b>C8WD</code>) you <b>must</b> include a backslash (<b>\\</b>) immediately before the comma to prevent it from being evaluated as a delimiter.<br><br>As with all query parameter values, the filter parameters must be URL encoded. For more information about encoding request parameters, refer to <a href=\"/api-docs/static/rest-request-components.html#parameters\" target=\"_blank\">URL encoding query parameter values</a>.</span><br>For example, to retrieve all vehicle trims for a 2022 Audi A4:<ul><li>Set the <strong>compatibility_property</strong> filter to <code>compatibility_property=Trim</code></li><li>Include the following name/value filters using one <strong>filter</strong> parameter:<ul><li><code>Year:2022</code></li><li><code>Make:Audi</code></li><li><code>Model:A4</code></li><li><code>BodyStyle:AWD B9 8W5\\,8WD</code></li></ul></li></ul>The resulting comma-separated filter query parameter is:<pre><code>filter=Year:2022,Make:Audi,Model:A4,BodyStyle:AWD B9 8W5\\,8WD</code></pre><br>The following sample shows the same filter but with URL encoding for the blank spaces.<br><pre><code>GET https://api.ebay.com/commerce/<br>taxonomy/v1/category_tree/100/<br>get_compatibility_property_values?<b>category_id</b>=6016&<b>compatibility_property</b>=Trim&<b>filter</b>=Year:2022,Make:Audi,Model:A4,BodyStyle:AWD%20B9%208W5%5C%2C8WD</code></pre><br><span class=\"tablenote\"><b>Note:</b> While not required, it is strongly recommended that users limit the size of the result set by using the <b>filter</b> query parameter. Failure to do so may result in a timeout error if too much data is attempted to be returned.</span> For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:ConstraintFilter

try {
    $result = $apiInstance->getCompatibilityPropertyValues($categoryTreeId, $compatibilityProperty, $categoryId, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->getCompatibilityPropertyValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categoryTreeId** | **string**| This is the unique identifier of the category tree. The following is the list of &lt;strong&gt;category_tree_id&lt;/strong&gt; values and the eBay marketplaces that they represent. One of these ID values must be passed in as a path parameter, and the &lt;strong&gt;category_id&lt;/strong&gt; value, that is passed in as query parameter, must be a valid eBay category on that eBay marketplace that supports parts compatibility for cars, trucks, or motorcycles.&lt;br&gt;&lt;br&gt;&lt;ul&gt;&lt;li&gt;eBay US: 0&lt;/li&gt;&lt;li&gt;eBay Motors US: 100&lt;/li&gt;&lt;li&gt;eBay Canada: 2&lt;/li&gt;&lt;li&gt;eBay UK: 3&lt;/li&gt;&lt;li&gt;eBay Germany: 77&lt;/li&gt;&lt;li&gt;eBay Australia: 15&lt;/li&gt;&lt;li&gt;eBay France: 71&lt;/li&gt;&lt;li&gt;eBay Italy: 101&lt;/li&gt;&lt;li&gt;eBay Spain: 186&lt;/li&gt;&lt;/ul&gt; | |
| **compatibilityProperty** | **string**| One compatible vehicle property applicable to the specified eBay marketplace and eBay category is specified in this required filter. Compatible vehicle properties are returned in the &lt;strong&gt;compatibilityProperties.name&lt;/strong&gt; field of a &lt;strong&gt;getCompatibilityProperties&lt;/strong&gt; response. &lt;br&gt;&lt;br&gt; For example, if you wanted to retrieve all vehicle trims for a 2018 Toyota Camry, you would set this filter as follows: &lt;code&gt;compatibility_property&#x3D;Trim&lt;/code&gt; and then include the following three name/value filters through one &lt;strong&gt;filter&lt;/strong&gt; parameter: &lt;code&gt;filter&#x3D;Year:2018,Make:Toyota,Model:Camry&lt;/code&gt;.&lt;br&gt;&lt;br&gt;So, putting this all together, the URI would look something like this:&lt;br&gt;&lt;br&gt;&lt;pre&gt;&lt;code&gt;GET https://api.ebay.com/commerce/&lt;br&gt;taxonomy/v1/category_tree/100/&lt;br&gt;get_compatibility_property_values?&lt;br&gt;&lt;strong&gt;category_id&lt;/strong&gt;&#x3D;6016&amp;&lt;strong&gt;compatibility_property&lt;/strong&gt;&#x3D;Trim&lt;br&gt;&amp;&lt;strong&gt;filter&lt;/strong&gt;&#x3D;Year:2018,Make:Toyota,Model:Camry&lt;/code&gt;&lt;/pre&gt; | |
| **categoryId** | **string**| The unique identifier of an eBay category. This eBay category must be a valid eBay category on the specified eBay marketplace, and the category must support parts compatibility for cars, trucks, or motorcycles.&lt;br&gt;&lt;br&gt; The &lt;strong&gt;getAutomotivePartsCompatibilityPolicies&lt;/strong&gt; method of the Selling Metadata API can be used to retrieve all eBay categories for an eBay marketplace that support parts compatibility for vehicles. | |
| **filter** | **string**| One or more compatible vehicle property name/value pairs are passed in through this query parameter. The compatible vehicle property name and corresponding value are delimited with a colon (:), such as &lt;code&gt;filter&#x3D;Year:2018&lt;/code&gt;, and multiple compatible vehicle property name/value pairs are delimited with a comma (,).&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; Commas are used as delimiters between filter values. If a value includes a comma (e.g., &lt;code&gt;BodyStyle:AWD B9 8W5&lt;b&gt;,&lt;/b&gt;C8WD&lt;/code&gt;) you &lt;b&gt;must&lt;/b&gt; include a backslash (&lt;b&gt;\\&lt;/b&gt;) immediately before the comma to prevent it from being evaluated as a delimiter.&lt;br&gt;&lt;br&gt;As with all query parameter values, the filter parameters must be URL encoded. For more information about encoding request parameters, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#parameters\&quot; target&#x3D;\&quot;_blank\&quot;&gt;URL encoding query parameter values&lt;/a&gt;.&lt;/span&gt;&lt;br&gt;For example, to retrieve all vehicle trims for a 2022 Audi A4:&lt;ul&gt;&lt;li&gt;Set the &lt;strong&gt;compatibility_property&lt;/strong&gt; filter to &lt;code&gt;compatibility_property&#x3D;Trim&lt;/code&gt;&lt;/li&gt;&lt;li&gt;Include the following name/value filters using one &lt;strong&gt;filter&lt;/strong&gt; parameter:&lt;ul&gt;&lt;li&gt;&lt;code&gt;Year:2022&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;Make:Audi&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;Model:A4&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;BodyStyle:AWD B9 8W5\\,8WD&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/li&gt;&lt;/ul&gt;The resulting comma-separated filter query parameter is:&lt;pre&gt;&lt;code&gt;filter&#x3D;Year:2022,Make:Audi,Model:A4,BodyStyle:AWD B9 8W5\\,8WD&lt;/code&gt;&lt;/pre&gt;&lt;br&gt;The following sample shows the same filter but with URL encoding for the blank spaces.&lt;br&gt;&lt;pre&gt;&lt;code&gt;GET https://api.ebay.com/commerce/&lt;br&gt;taxonomy/v1/category_tree/100/&lt;br&gt;get_compatibility_property_values?&lt;b&gt;category_id&lt;/b&gt;&#x3D;6016&amp;&lt;b&gt;compatibility_property&lt;/b&gt;&#x3D;Trim&amp;&lt;b&gt;filter&lt;/b&gt;&#x3D;Year:2022,Make:Audi,Model:A4,BodyStyle:AWD%20B9%208W5%5C%2C8WD&lt;/code&gt;&lt;/pre&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; While not required, it is strongly recommended that users limit the size of the result set by using the &lt;b&gt;filter&lt;/b&gt; query parameter. Failure to do so may result in a timeout error if too much data is attempted to be returned.&lt;/span&gt; For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:ConstraintFilter | [optional] |

### Return type

[**\macropage\SDKs\ebay\rest\taxonomy\Model\GetCompatibilityPropertyValuesResponse**](../Model/GetCompatibilityPropertyValuesResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDefaultCategoryTreeId()`

```php
getDefaultCategoryTreeId($marketplaceId): \macropage\SDKs\ebay\rest\taxonomy\Model\BaseCategoryTree
```

Get a Default Category Tree ID

A given eBay marketplace might use multiple category trees, but one of those trees is considered to be the default for that marketplace. This call retrieves a reference to the default category tree associated with the specified eBay marketplace ID. The response includes only the tree's unique identifier and version, which you can use to retrieve more details about the tree, its structure, and its individual category nodes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\taxonomy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\taxonomy\Api\CategoryTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplaceId = 'marketplaceId_example'; // string | The unique identifier of the eBay marketplace for which the category tree ID is requested. For a list of supported marketplace IDs, see <a href=\"/api-docs/commerce/taxonomy/static/supportedmarketplaces.html\">Marketplaces with Default Category Trees</a>.

try {
    $result = $apiInstance->getDefaultCategoryTreeId($marketplaceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->getDefaultCategoryTreeId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marketplaceId** | **string**| The unique identifier of the eBay marketplace for which the category tree ID is requested. For a list of supported marketplace IDs, see &lt;a href&#x3D;\&quot;/api-docs/commerce/taxonomy/static/supportedmarketplaces.html\&quot;&gt;Marketplaces with Default Category Trees&lt;/a&gt;. | |

### Return type

[**\macropage\SDKs\ebay\rest\taxonomy\Model\BaseCategoryTree**](../Model/BaseCategoryTree.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExpiredCategories()`

```php
getExpiredCategories($categoryTreeId): \macropage\SDKs\ebay\rest\taxonomy\Model\ExpiredCategories
```



This method retrieves the mappings of expired leaf categories in the specified category tree to their corresponding active leaf categories. Note that in some cases, several expired categories are mapped to a single active category.<br><br><span class=\"tablenote\"><b>Note:</b> This method only returns information about categories that have been mapped (i.e., combined categories and split categories). It does not return information about expired categories that have no corresponding active categories. When a category expires in this manner, any completed items that were listed in the expired category can still be found, but new listings cannot be created in the category.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\taxonomy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\taxonomy\Api\CategoryTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryTreeId = 'categoryTreeId_example'; // string | The unique identifier of the eBay category tree.<br><br>The category tree ID for an eBay marketplace can be retrieved using the <a href=\"/api-docs/commerce/taxonomy/resources/category_tree/methods/getDefaultCategoryTreeId\">getDefaultCategoryTreeId</a> method.

try {
    $result = $apiInstance->getExpiredCategories($categoryTreeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->getExpiredCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categoryTreeId** | **string**| The unique identifier of the eBay category tree.&lt;br&gt;&lt;br&gt;The category tree ID for an eBay marketplace can be retrieved using the &lt;a href&#x3D;\&quot;/api-docs/commerce/taxonomy/resources/category_tree/methods/getDefaultCategoryTreeId\&quot;&gt;getDefaultCategoryTreeId&lt;/a&gt; method. | |

### Return type

[**\macropage\SDKs\ebay\rest\taxonomy\Model\ExpiredCategories**](../Model/ExpiredCategories.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemAspectsForCategory()`

```php
getItemAspectsForCategory($categoryId, $categoryTreeId): \macropage\SDKs\ebay\rest\taxonomy\Model\AspectMetadata
```



This call returns a list of <i>aspects</i> that are appropriate or necessary for accurately describing items in the specified leaf category. Each aspect identifies an item attribute (for example, color,) for which the seller will be required or encouraged to provide a value (or variation values) when offering an item in that category on eBay.<br><br>For each aspect, <b>getItemAspectsForCategory</b> provides complete metadata, including: <ul><li>The aspect's data type, format, and entry mode</li><li>Whether the aspect is required in listings</li><li>Whether the aspect can be used for item variations</li><li>Whether the aspect accepts multiple values for an item</li><li>Allowed values for the aspect</li></ul> Use this information to construct an interface through which sellers can enter or select the appropriate values for their items or item variations. Once you collect those values, include them as product aspects when creating inventory items using the Inventory API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\taxonomy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\taxonomy\Api\CategoryTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryId = 'categoryId_example'; // string | The unique identifier of the leaf category for which aspects are being requested.<br><br><span class=\"tablenote\"> <strong>Note:</strong> If the <b>category_id</b> submitted does not identify a leaf node of the tree, this call returns an error. </span>
$categoryTreeId = 'categoryTreeId_example'; // string | The unique identifier of the eBay category tree. The category tree ID for an eBay marketplace can be retrieved using the <b>getDefaultCategoryTreeId</b> method.

try {
    $result = $apiInstance->getItemAspectsForCategory($categoryId, $categoryTreeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->getItemAspectsForCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categoryId** | **string**| The unique identifier of the leaf category for which aspects are being requested.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;strong&gt;Note:&lt;/strong&gt; If the &lt;b&gt;category_id&lt;/b&gt; submitted does not identify a leaf node of the tree, this call returns an error. &lt;/span&gt; | |
| **categoryTreeId** | **string**| The unique identifier of the eBay category tree. The category tree ID for an eBay marketplace can be retrieved using the &lt;b&gt;getDefaultCategoryTreeId&lt;/b&gt; method. | |

### Return type

[**\macropage\SDKs\ebay\rest\taxonomy\Model\AspectMetadata**](../Model/AspectMetadata.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
