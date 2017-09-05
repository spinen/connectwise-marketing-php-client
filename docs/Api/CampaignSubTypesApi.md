# Spinen\ConnectWise\Clients\Marketing\CampaignSubTypesApi
Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**marketingCampaignsTypesIdSubTypesCountGet**](CampaignSubTypesApi.md#marketingCampaignsTypesIdSubTypesCountGet) | **GET** /marketing/campaigns/types/{id}/subTypes/count | 
[**marketingCampaignsTypesIdSubTypesGet**](CampaignSubTypesApi.md#marketingCampaignsTypesIdSubTypesGet) | **GET** /marketing/campaigns/types/{id}/subTypes | 
[**marketingCampaignsTypesIdSubTypesPost**](CampaignSubTypesApi.md#marketingCampaignsTypesIdSubTypesPost) | **POST** /marketing/campaigns/types/{id}/subTypes | 
[**marketingCampaignsTypesIdSubTypesSubTypeIdDelete**](CampaignSubTypesApi.md#marketingCampaignsTypesIdSubTypesSubTypeIdDelete) | **DELETE** /marketing/campaigns/types/{id}/subTypes/{subTypeId} | 
[**marketingCampaignsTypesIdSubTypesSubTypeIdGet**](CampaignSubTypesApi.md#marketingCampaignsTypesIdSubTypesSubTypeIdGet) | **GET** /marketing/campaigns/types/{id}/subTypes/{subTypeId} | 
[**marketingCampaignsTypesIdSubTypesSubTypeIdPatch**](CampaignSubTypesApi.md#marketingCampaignsTypesIdSubTypesSubTypeIdPatch) | **PATCH** /marketing/campaigns/types/{id}/subTypes/{subTypeId} | 
[**marketingCampaignsTypesIdSubTypesSubTypeIdPut**](CampaignSubTypesApi.md#marketingCampaignsTypesIdSubTypesSubTypeIdPut) | **PUT** /marketing/campaigns/types/{id}/subTypes/{subTypeId} | 


# **marketingCampaignsTypesIdSubTypesCountGet**
> \Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\Count marketingCampaignsTypesIdSubTypesCountGet($id, $conditions)



Get Campaign Sub Types Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\CampaignSubTypesApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->marketingCampaignsTypesIdSubTypesCountGet($id, $conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignSubTypesApi->marketingCampaignsTypesIdSubTypesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingCampaignsTypesIdSubTypesGet**
> \Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\CampaignSubType[] marketingCampaignsTypesIdSubTypesGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Campaign Sub Types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\CampaignSubTypesApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->marketingCampaignsTypesIdSubTypesGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignSubTypesApi->marketingCampaignsTypesIdSubTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **conditions** | **string**|  | [optional]
 **order_by** | **string**|  | [optional]
 **childconditions** | **string**|  | [optional]
 **customfieldconditions** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\CampaignSubType[]**](../Model/CampaignSubType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingCampaignsTypesIdSubTypesPost**
> \Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\CampaignSubType marketingCampaignsTypesIdSubTypesPost($id, $campaign_sub_type)



Create Campaign Sub Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\CampaignSubTypesApi();
$id = 56; // int | 
$campaign_sub_type = new \Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\CampaignSubType(); // \Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\CampaignSubType | 

try {
    $result = $api_instance->marketingCampaignsTypesIdSubTypesPost($id, $campaign_sub_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignSubTypesApi->marketingCampaignsTypesIdSubTypesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **campaign_sub_type** | [**\Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\CampaignSubType**](../Model/\Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\CampaignSubType.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\CampaignSubType**](../Model/CampaignSubType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingCampaignsTypesIdSubTypesSubTypeIdDelete**
> marketingCampaignsTypesIdSubTypesSubTypeIdDelete($id, $sub_type_id)



Delete Campaign Sub Type By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\CampaignSubTypesApi();
$id = 56; // int | 
$sub_type_id = 56; // int | 

try {
    $api_instance->marketingCampaignsTypesIdSubTypesSubTypeIdDelete($id, $sub_type_id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignSubTypesApi->marketingCampaignsTypesIdSubTypesSubTypeIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **sub_type_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingCampaignsTypesIdSubTypesSubTypeIdGet**
> \Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\CampaignSubType marketingCampaignsTypesIdSubTypesSubTypeIdGet($id, $sub_type_id)



Get Campaign Sub Type By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\CampaignSubTypesApi();
$id = 56; // int | 
$sub_type_id = 56; // int | 

try {
    $result = $api_instance->marketingCampaignsTypesIdSubTypesSubTypeIdGet($id, $sub_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignSubTypesApi->marketingCampaignsTypesIdSubTypesSubTypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **sub_type_id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\CampaignSubType**](../Model/CampaignSubType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingCampaignsTypesIdSubTypesSubTypeIdPatch**
> \Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\CampaignSubType marketingCampaignsTypesIdSubTypesSubTypeIdPatch($id, $sub_type_id, $operations)



Update Campaign Sub Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\CampaignSubTypesApi();
$id = 56; // int | 
$sub_type_id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\PatchOperation[] | 

try {
    $result = $api_instance->marketingCampaignsTypesIdSubTypesSubTypeIdPatch($id, $sub_type_id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignSubTypesApi->marketingCampaignsTypesIdSubTypesSubTypeIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **sub_type_id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\CampaignSubType**](../Model/CampaignSubType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingCampaignsTypesIdSubTypesSubTypeIdPut**
> \Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\CampaignSubType marketingCampaignsTypesIdSubTypesSubTypeIdPut($id, $sub_type_id, $campaign_sub_type)



Replace Campaign Sub Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\CampaignSubTypesApi();
$id = 56; // int | 
$sub_type_id = 56; // int | 
$campaign_sub_type = new \Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\CampaignSubType(); // \Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\CampaignSubType | 

try {
    $result = $api_instance->marketingCampaignsTypesIdSubTypesSubTypeIdPut($id, $sub_type_id, $campaign_sub_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignSubTypesApi->marketingCampaignsTypesIdSubTypesSubTypeIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **sub_type_id** | **int**|  |
 **campaign_sub_type** | [**\Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\CampaignSubType**](../Model/\Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\CampaignSubType.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\CampaignSubType**](../Model/CampaignSubType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
