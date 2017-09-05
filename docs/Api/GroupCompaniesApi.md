# Spinen\ConnectWise\Clients\Marketing\GroupCompaniesApi
Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**marketingGroupsIdCompaniesCompanyIdDelete**](GroupCompaniesApi.md#marketingGroupsIdCompaniesCompanyIdDelete) | **DELETE** /marketing/groups/{id}/companies/{companyId} | 
[**marketingGroupsIdCompaniesCompanyIdGet**](GroupCompaniesApi.md#marketingGroupsIdCompaniesCompanyIdGet) | **GET** /marketing/groups/{id}/companies/{companyId} | 
[**marketingGroupsIdCompaniesCompanyIdPatch**](GroupCompaniesApi.md#marketingGroupsIdCompaniesCompanyIdPatch) | **PATCH** /marketing/groups/{id}/companies/{companyId} | 
[**marketingGroupsIdCompaniesCompanyIdPut**](GroupCompaniesApi.md#marketingGroupsIdCompaniesCompanyIdPut) | **PUT** /marketing/groups/{id}/companies/{companyId} | 
[**marketingGroupsIdCompaniesCountGet**](GroupCompaniesApi.md#marketingGroupsIdCompaniesCountGet) | **GET** /marketing/groups/{id}/companies/count | 
[**marketingGroupsIdCompaniesGet**](GroupCompaniesApi.md#marketingGroupsIdCompaniesGet) | **GET** /marketing/groups/{id}/companies | 
[**marketingGroupsIdCompaniesPost**](GroupCompaniesApi.md#marketingGroupsIdCompaniesPost) | **POST** /marketing/groups/{id}/companies | 


# **marketingGroupsIdCompaniesCompanyIdDelete**
> marketingGroupsIdCompaniesCompanyIdDelete($id, $company_id)



Delete Marketing Company By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\GroupCompaniesApi();
$id = 56; // int | 
$company_id = 56; // int | 

try {
    $api_instance->marketingGroupsIdCompaniesCompanyIdDelete($id, $company_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupCompaniesApi->marketingGroupsIdCompaniesCompanyIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **company_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingGroupsIdCompaniesCompanyIdGet**
> \Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\MarketingCompany marketingGroupsIdCompaniesCompanyIdGet($id, $company_id)



Get Marketing Company By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\GroupCompaniesApi();
$id = 56; // int | 
$company_id = 56; // int | 

try {
    $result = $api_instance->marketingGroupsIdCompaniesCompanyIdGet($id, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupCompaniesApi->marketingGroupsIdCompaniesCompanyIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **company_id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\MarketingCompany**](../Model/MarketingCompany.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingGroupsIdCompaniesCompanyIdPatch**
> \Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\MarketingCompany marketingGroupsIdCompaniesCompanyIdPatch($id, $company_id, $operations)



Update Marketing Company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\GroupCompaniesApi();
$id = 56; // int | 
$company_id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\PatchOperation[] | 

try {
    $result = $api_instance->marketingGroupsIdCompaniesCompanyIdPatch($id, $company_id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupCompaniesApi->marketingGroupsIdCompaniesCompanyIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **company_id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\MarketingCompany**](../Model/MarketingCompany.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingGroupsIdCompaniesCompanyIdPut**
> \Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\MarketingCompany marketingGroupsIdCompaniesCompanyIdPut($id, $company_id, $marketing_company)



Replace Marketing Company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\GroupCompaniesApi();
$id = 56; // int | 
$company_id = 56; // int | 
$marketing_company = new \Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\MarketingCompany(); // \Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\MarketingCompany | 

try {
    $result = $api_instance->marketingGroupsIdCompaniesCompanyIdPut($id, $company_id, $marketing_company);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupCompaniesApi->marketingGroupsIdCompaniesCompanyIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **company_id** | **int**|  |
 **marketing_company** | [**\Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\MarketingCompany**](../Model/\Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\MarketingCompany.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\MarketingCompany**](../Model/MarketingCompany.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingGroupsIdCompaniesCountGet**
> \Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\Count marketingGroupsIdCompaniesCountGet($id, $conditions)



Get Marketing Companys Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\GroupCompaniesApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->marketingGroupsIdCompaniesCountGet($id, $conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupCompaniesApi->marketingGroupsIdCompaniesCountGet: ', $e->getMessage(), PHP_EOL;
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

# **marketingGroupsIdCompaniesGet**
> \Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\MarketingCompany[] marketingGroupsIdCompaniesGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Marketing Companys

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\GroupCompaniesApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->marketingGroupsIdCompaniesGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupCompaniesApi->marketingGroupsIdCompaniesGet: ', $e->getMessage(), PHP_EOL;
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

[**\Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\MarketingCompany[]**](../Model/MarketingCompany.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketingGroupsIdCompaniesPost**
> \Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\MarketingCompany marketingGroupsIdCompaniesPost($id, $marketing_company)



Create Marketing Company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Marketing\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Marketing\Api\GroupCompaniesApi();
$id = 56; // int | 
$marketing_company = new \Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\MarketingCompany(); // \Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\MarketingCompany | 

try {
    $result = $api_instance->marketingGroupsIdCompaniesPost($id, $marketing_company);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupCompaniesApi->marketingGroupsIdCompaniesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **marketing_company** | [**\Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\MarketingCompany**](../Model/\Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\MarketingCompany.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Model\MarketingCompany**](../Model/MarketingCompany.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
