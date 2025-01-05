<?php


use macropage\SDKs\ebay\rest\taxonomy\API\CategoryTreeApi;
use macropage\SDKs\ebay\rest\taxonomy\Configuration;

require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = Configuration::getDefaultConfiguration()->setAccessToken('AUTH_TOKEN');


$apiInstance    = new CategoryTreeApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCategoryTree('77','gzip');
    file_put_contents('category_tree.json', $result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->fetchItemAspects: ', $e->getMessage(), PHP_EOL;
}