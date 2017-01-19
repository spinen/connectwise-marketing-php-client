# Spinen\ConnectWise\Clients\Marketing\CampaignEmailsOpenedApi
Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**marketingCampaignsIdEmailsOpenedCountGet**](CampaignEmailsOpenedApi.md#marketingCampaignsIdEmailsOpenedCountGet) | **GET** /marketing/campaigns/{id}/emailsOpened/count | 
[**marketingCampaignsIdEmailsOpenedEmailOpenedIdDelete**](CampaignEmailsOpenedApi.md#marketingCampaignsIdEmailsOpenedEmailOpenedIdDelete) | **DELETE** /marketing/campaigns/{id}/emailsOpened/{emailOpenedId} | 
[**marketingCampaignsIdEmailsOpenedEmailOpenedIdGet**](CampaignEmailsOpenedApi.md#marketingCampaignsIdEmailsOpenedEmailOpenedIdGet) | **GET** /marketing/campaigns/{id}/emailsOpened/{emailOpenedId} | 
[**marketingCampaignsIdEmailsOpenedEmailOpenedIdPatch**](CampaignEmailsOpenedApi.md#marketingCampaignsIdEmailsOpenedEmailOpenedIdPatch) | **PATCH** /marketing/campaigns/{id}/emailsOpened/{emailOpenedId} | 
[**marketingCampaignsIdEmailsOpenedEmailOpenedIdPut**](CampaignEmailsOpenedApi.md#marketingCampaignsIdEmailsOpenedEmailOpenedIdPut) | **PUT** /marketing/campaigns/{id}/emailsOpened/{emailOpenedId} | 
[**marketingCampaignsIdEmailsOpenedGet**](CampaignEmailsOpenedApi.md#marketingCampaignsIdEmailsOpenedGet) | **GET** /marketing/campaigns/{id}/emailsOpened | 
[**marketingCampaignsIdEmailsOpenedPost**](CampaignEmailsOpenedApi.md#marketingCampaignsIdEmailsOpenedPost) | **POST** /marketing/campaigns/{id}/emailsOpened | 


# **marketingCampaignsIdEmailsOpenedCountGet**
> \Spinen\ConnectWise\Clients\Marketing\Model\Count marketingCampaignsIdEmailsOpenedCountGet($id, $conditions)



Get Emails Opened Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\CampaignEmailsOpenedApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->marketingCampaignsIdEmailsOpenedCountGet($id, $conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignEmailsOpenedApi->marketingCampaignsIdEmailsOpenedCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Marketing\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingCampaignsIdEmailsOpenedEmailOpenedIdDelete**
> marketingCampaignsIdEmailsOpenedEmailOpenedIdDelete($id, $email_opened_id)



Delete Email Opened By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\CampaignEmailsOpenedApi();
$id = 56; // int | 
$email_opened_id = 56; // int | 

try {
    $api_instance->marketingCampaignsIdEmailsOpenedEmailOpenedIdDelete($id, $email_opened_id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignEmailsOpenedApi->marketingCampaignsIdEmailsOpenedEmailOpenedIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **email_opened_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingCampaignsIdEmailsOpenedEmailOpenedIdGet**
> \Spinen\ConnectWise\Clients\Marketing\Model\EmailOpened marketingCampaignsIdEmailsOpenedEmailOpenedIdGet($id, $email_opened_id)



Get Email Opened By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\CampaignEmailsOpenedApi();
$id = 56; // int | 
$email_opened_id = 56; // int | 

try {
    $result = $api_instance->marketingCampaignsIdEmailsOpenedEmailOpenedIdGet($id, $email_opened_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignEmailsOpenedApi->marketingCampaignsIdEmailsOpenedEmailOpenedIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **email_opened_id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Marketing\Model\EmailOpened**](../Model/EmailOpened.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingCampaignsIdEmailsOpenedEmailOpenedIdPatch**
> \Spinen\ConnectWise\Clients\Marketing\Model\EmailOpened marketingCampaignsIdEmailsOpenedEmailOpenedIdPatch($id, $email_opened_id, $operations)



Update Email Opened

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\CampaignEmailsOpenedApi();
$id = 56; // int | 
$email_opened_id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Marketing\Model\PatchOperation[] | 

try {
    $result = $api_instance->marketingCampaignsIdEmailsOpenedEmailOpenedIdPatch($id, $email_opened_id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignEmailsOpenedApi->marketingCampaignsIdEmailsOpenedEmailOpenedIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **email_opened_id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Marketing\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Marketing\Model\EmailOpened**](../Model/EmailOpened.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingCampaignsIdEmailsOpenedEmailOpenedIdPut**
> \Spinen\ConnectWise\Clients\Marketing\Model\EmailOpened marketingCampaignsIdEmailsOpenedEmailOpenedIdPut($id, $email_opened_id, $email_opened)



Replace Email Opened

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\CampaignEmailsOpenedApi();
$id = 56; // int | 
$email_opened_id = 56; // int | 
$email_opened = new \Spinen\ConnectWise\Clients\Marketing\Model\EmailOpened(); // \Spinen\ConnectWise\Clients\Marketing\Model\EmailOpened | 

try {
    $result = $api_instance->marketingCampaignsIdEmailsOpenedEmailOpenedIdPut($id, $email_opened_id, $email_opened);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignEmailsOpenedApi->marketingCampaignsIdEmailsOpenedEmailOpenedIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **email_opened_id** | **int**|  |
 **email_opened** | [**\Spinen\ConnectWise\Clients\Marketing\Model\EmailOpened**](../Model/\Spinen\ConnectWise\Clients\Marketing\Model\EmailOpened.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Marketing\Model\EmailOpened**](../Model/EmailOpened.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingCampaignsIdEmailsOpenedGet**
> \Spinen\ConnectWise\Clients\Marketing\Model\EmailOpened[] marketingCampaignsIdEmailsOpenedGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Emails Opened

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\CampaignEmailsOpenedApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->marketingCampaignsIdEmailsOpenedGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignEmailsOpenedApi->marketingCampaignsIdEmailsOpenedGet: ', $e->getMessage(), PHP_EOL;
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

[**\Spinen\ConnectWise\Clients\Marketing\Model\EmailOpened[]**](../Model/EmailOpened.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingCampaignsIdEmailsOpenedPost**
> \Spinen\ConnectWise\Clients\Marketing\Model\EmailOpened marketingCampaignsIdEmailsOpenedPost($id, $email_opened)



Create Email Opened

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\CampaignEmailsOpenedApi();
$id = 56; // int | 
$email_opened = new \Spinen\ConnectWise\Clients\Marketing\Model\EmailOpened(); // \Spinen\ConnectWise\Clients\Marketing\Model\EmailOpened | 

try {
    $result = $api_instance->marketingCampaignsIdEmailsOpenedPost($id, $email_opened);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignEmailsOpenedApi->marketingCampaignsIdEmailsOpenedPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **email_opened** | [**\Spinen\ConnectWise\Clients\Marketing\Model\EmailOpened**](../Model/\Spinen\ConnectWise\Clients\Marketing\Model\EmailOpened.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Marketing\Model\EmailOpened**](../Model/EmailOpened.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
