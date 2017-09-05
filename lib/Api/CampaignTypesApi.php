<?php
/**
 * CampaignTypesApi
 * PHP version 5
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Marketing
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketing API
 *
 * ConnectWise Marketing API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: platform@connectwise.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Clients\Marketing\Spinen\ConnectWise\Clients\Marketing\Api;

use \Spinen\ConnectWise\Clients\Marketing\ApiClient;
use \Spinen\ConnectWise\Clients\Marketing\ApiException;
use \Spinen\ConnectWise\Clients\Marketing\Configuration;
use \Spinen\ConnectWise\Clients\Marketing\ObjectSerializer;

/**
 * CampaignTypesApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Marketing
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CampaignTypesApi
{
    /**
     * API Client
     *
     * @var \Spinen\ConnectWise\Clients\Marketing\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Spinen\ConnectWise\Clients\Marketing\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Spinen\ConnectWise\Clients\Marketing\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Spinen\ConnectWise\Clients\Marketing\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Spinen\ConnectWise\Clients\Marketing\ApiClient $apiClient set the API client
     *
     * @return CampaignTypesApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Marketing\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation marketingCampaignsTypesCountGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Marketing\Model\Count
     */
    public function marketingCampaignsTypesCountGet($conditions = null)
    {
        list($response) = $this->marketingCampaignsTypesCountGetWithHttpInfo($conditions);
        return $response;
    }

    /**
     * Operation marketingCampaignsTypesCountGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Marketing\Model\Count, HTTP status code, HTTP response headers (array of strings)
     */
    public function marketingCampaignsTypesCountGetWithHttpInfo($conditions = null)
    {
        // parse inputs
        $resourcePath = "/marketing/campaigns/types/count";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Marketing\Model\Count',
                '/marketing/campaigns/types/count'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Marketing\Model\Count', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Marketing\Model\Count', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Marketing\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation marketingCampaignsTypesGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Marketing\Model\CampaignType[]
     */
    public function marketingCampaignsTypesGet($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->marketingCampaignsTypesGetWithHttpInfo($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation marketingCampaignsTypesGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Marketing\Model\CampaignType[], HTTP status code, HTTP response headers (array of strings)
     */
    public function marketingCampaignsTypesGetWithHttpInfo($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // parse inputs
        $resourcePath = "/marketing/campaigns/types";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }
        // query params
        if ($order_by !== null) {
            $queryParams['orderBy'] = $this->apiClient->getSerializer()->toQueryValue($order_by);
        }
        // query params
        if ($childconditions !== null) {
            $queryParams['childconditions'] = $this->apiClient->getSerializer()->toQueryValue($childconditions);
        }
        // query params
        if ($customfieldconditions !== null) {
            $queryParams['customfieldconditions'] = $this->apiClient->getSerializer()->toQueryValue($customfieldconditions);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Marketing\Model\CampaignType[]',
                '/marketing/campaigns/types'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Marketing\Model\CampaignType[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Marketing\Model\CampaignType[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Marketing\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation marketingCampaignsTypesIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return void
     */
    public function marketingCampaignsTypesIdDelete($id)
    {
        list($response) = $this->marketingCampaignsTypesIdDeleteWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation marketingCampaignsTypesIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function marketingCampaignsTypesIdDeleteWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling marketingCampaignsTypesIdDelete');
        }
        // parse inputs
        $resourcePath = "/marketing/campaigns/types/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/marketing/campaigns/types/{id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Marketing\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation marketingCampaignsTypesIdGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Marketing\Model\CampaignType
     */
    public function marketingCampaignsTypesIdGet($id)
    {
        list($response) = $this->marketingCampaignsTypesIdGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation marketingCampaignsTypesIdGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Marketing\Model\CampaignType, HTTP status code, HTTP response headers (array of strings)
     */
    public function marketingCampaignsTypesIdGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling marketingCampaignsTypesIdGet');
        }
        // parse inputs
        $resourcePath = "/marketing/campaigns/types/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Marketing\Model\CampaignType',
                '/marketing/campaigns/types/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Marketing\Model\CampaignType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Marketing\Model\CampaignType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Marketing\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation marketingCampaignsTypesIdPatch
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Marketing\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Marketing\Model\CampaignType
     */
    public function marketingCampaignsTypesIdPatch($id, $operations)
    {
        list($response) = $this->marketingCampaignsTypesIdPatchWithHttpInfo($id, $operations);
        return $response;
    }

    /**
     * Operation marketingCampaignsTypesIdPatchWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Marketing\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Marketing\Model\CampaignType, HTTP status code, HTTP response headers (array of strings)
     */
    public function marketingCampaignsTypesIdPatchWithHttpInfo($id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling marketingCampaignsTypesIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling marketingCampaignsTypesIdPatch');
        }
        // parse inputs
        $resourcePath = "/marketing/campaigns/types/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($operations)) {
            $_tempBody = $operations;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Marketing\Model\CampaignType',
                '/marketing/campaigns/types/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Marketing\Model\CampaignType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Marketing\Model\CampaignType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Marketing\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation marketingCampaignsTypesIdPut
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Marketing\Model\CampaignType $campaign_type  (required)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Marketing\Model\CampaignType
     */
    public function marketingCampaignsTypesIdPut($id, $campaign_type)
    {
        list($response) = $this->marketingCampaignsTypesIdPutWithHttpInfo($id, $campaign_type);
        return $response;
    }

    /**
     * Operation marketingCampaignsTypesIdPutWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Marketing\Model\CampaignType $campaign_type  (required)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Marketing\Model\CampaignType, HTTP status code, HTTP response headers (array of strings)
     */
    public function marketingCampaignsTypesIdPutWithHttpInfo($id, $campaign_type)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling marketingCampaignsTypesIdPut');
        }
        // verify the required parameter 'campaign_type' is set
        if ($campaign_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $campaign_type when calling marketingCampaignsTypesIdPut');
        }
        // parse inputs
        $resourcePath = "/marketing/campaigns/types/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($campaign_type)) {
            $_tempBody = $campaign_type;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Marketing\Model\CampaignType',
                '/marketing/campaigns/types/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Marketing\Model\CampaignType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Marketing\Model\CampaignType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Marketing\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation marketingCampaignsTypesPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\Marketing\Model\CampaignType $campaign_type  (required)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Marketing\Model\CampaignType
     */
    public function marketingCampaignsTypesPost($campaign_type)
    {
        list($response) = $this->marketingCampaignsTypesPostWithHttpInfo($campaign_type);
        return $response;
    }

    /**
     * Operation marketingCampaignsTypesPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\Marketing\Model\CampaignType $campaign_type  (required)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Marketing\Model\CampaignType, HTTP status code, HTTP response headers (array of strings)
     */
    public function marketingCampaignsTypesPostWithHttpInfo($campaign_type)
    {
        // verify the required parameter 'campaign_type' is set
        if ($campaign_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $campaign_type when calling marketingCampaignsTypesPost');
        }
        // parse inputs
        $resourcePath = "/marketing/campaigns/types";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($campaign_type)) {
            $_tempBody = $campaign_type;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Marketing\Model\CampaignType',
                '/marketing/campaigns/types'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Marketing\Model\CampaignType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Marketing\Model\CampaignType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Marketing\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
