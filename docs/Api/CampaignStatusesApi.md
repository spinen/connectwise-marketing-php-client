# Spinen\ConnectWise\Clients\Marketing\CampaignStatusesApi
Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**marketingCampaignsStatusesCountGet**](CampaignStatusesApi.md#marketingCampaignsStatusesCountGet) | **GET** /marketing/campaigns/statuses/count | 
[**marketingCampaignsStatusesGet**](CampaignStatusesApi.md#marketingCampaignsStatusesGet) | **GET** /marketing/campaigns/statuses | 
[**marketingCampaignsStatusesIdDelete**](CampaignStatusesApi.md#marketingCampaignsStatusesIdDelete) | **DELETE** /marketing/campaigns/statuses/{id} | 
[**marketingCampaignsStatusesIdGet**](CampaignStatusesApi.md#marketingCampaignsStatusesIdGet) | **GET** /marketing/campaigns/statuses/{id} | 
[**marketingCampaignsStatusesIdPatch**](CampaignStatusesApi.md#marketingCampaignsStatusesIdPatch) | **PATCH** /marketing/campaigns/statuses/{id} | 
[**marketingCampaignsStatusesIdPut**](CampaignStatusesApi.md#marketingCampaignsStatusesIdPut) | **PUT** /marketing/campaigns/statuses/{id} | 
[**marketingCampaignsStatusesPost**](CampaignStatusesApi.md#marketingCampaignsStatusesPost) | **POST** /marketing/campaigns/statuses | 


# **marketingCampaignsStatusesCountGet**
> \Spinen\ConnectWise\Clients\Marketing\Model\Count marketingCampaignsStatusesCountGet($conditions)



Get Campaign Statuses Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\CampaignStatusesApi();
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->marketingCampaignsStatusesCountGet($conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignStatusesApi->marketingCampaignsStatusesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Marketing\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingCampaignsStatusesGet**
> \Spinen\ConnectWise\Clients\Marketing\Model\CampaignStatus[] marketingCampaignsStatusesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Campaign Statuses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\CampaignStatusesApi();
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->marketingCampaignsStatusesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignStatusesApi->marketingCampaignsStatusesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]
 **order_by** | **string**|  | [optional]
 **childconditions** | **string**|  | [optional]
 **customfieldconditions** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Marketing\Model\CampaignStatus[]**](../Model/CampaignStatus.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingCampaignsStatusesIdDelete**
> marketingCampaignsStatusesIdDelete($id)



Delete Campaign Status By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\CampaignStatusesApi();
$id = 56; // int | 

try {
    $api_instance->marketingCampaignsStatusesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignStatusesApi->marketingCampaignsStatusesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingCampaignsStatusesIdGet**
> \Spinen\ConnectWise\Clients\Marketing\Model\CampaignStatus marketingCampaignsStatusesIdGet($id)



Get Campaign Status By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\CampaignStatusesApi();
$id = 56; // int | 

try {
    $result = $api_instance->marketingCampaignsStatusesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignStatusesApi->marketingCampaignsStatusesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Marketing\Model\CampaignStatus**](../Model/CampaignStatus.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingCampaignsStatusesIdPatch**
> \Spinen\ConnectWise\Clients\Marketing\Model\CampaignStatus marketingCampaignsStatusesIdPatch($id, $operations)



Update Campaign Status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\CampaignStatusesApi();
$id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Marketing\Model\PatchOperation[] | 

try {
    $result = $api_instance->marketingCampaignsStatusesIdPatch($id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignStatusesApi->marketingCampaignsStatusesIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Marketing\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Marketing\Model\CampaignStatus**](../Model/CampaignStatus.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingCampaignsStatusesIdPut**
> \Spinen\ConnectWise\Clients\Marketing\Model\CampaignStatus marketingCampaignsStatusesIdPut($id, $campaign_status)



Replace Campaign Status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\CampaignStatusesApi();
$id = 56; // int | 
$campaign_status = new \Spinen\ConnectWise\Clients\Marketing\Model\CampaignStatus(); // \Spinen\ConnectWise\Clients\Marketing\Model\CampaignStatus | 

try {
    $result = $api_instance->marketingCampaignsStatusesIdPut($id, $campaign_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignStatusesApi->marketingCampaignsStatusesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **campaign_status** | [**\Spinen\ConnectWise\Clients\Marketing\Model\CampaignStatus**](../Model/\Spinen\ConnectWise\Clients\Marketing\Model\CampaignStatus.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Marketing\Model\CampaignStatus**](../Model/CampaignStatus.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingCampaignsStatusesPost**
> \Spinen\ConnectWise\Clients\Marketing\Model\CampaignStatus marketingCampaignsStatusesPost($campaign_status)



Create Campaign Status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\CampaignStatusesApi();
$campaign_status = new \Spinen\ConnectWise\Clients\Marketing\Model\CampaignStatus(); // \Spinen\ConnectWise\Clients\Marketing\Model\CampaignStatus | 

try {
    $result = $api_instance->marketingCampaignsStatusesPost($campaign_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignStatusesApi->marketingCampaignsStatusesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_status** | [**\Spinen\ConnectWise\Clients\Marketing\Model\CampaignStatus**](../Model/\Spinen\ConnectWise\Clients\Marketing\Model\CampaignStatus.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Marketing\Model\CampaignStatus**](../Model/CampaignStatus.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

