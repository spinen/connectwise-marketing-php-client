<?php
/**
 * CampaignFormsSubmittedApi
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

namespace Spinen\ConnectWise\Clients\Marketing\Api;

use \Spinen\ConnectWise\Clients\Marketing\ApiClient;
use \Spinen\ConnectWise\Clients\Marketing\ApiException;
use \Spinen\ConnectWise\Clients\Marketing\Configuration;
use \Spinen\ConnectWise\Clients\Marketing\ObjectSerializer;

/**
 * CampaignFormsSubmittedApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Marketing
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CampaignFormsSubmittedApi
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
     * @return CampaignFormsSubmittedApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Marketing\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation marketingCampaignsIdFormsSubmittedCountGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Marketing\Model\Count
     */
    public function marketingCampaignsIdFormsSubmittedCountGet($id, $conditions = null)
    {
        list($response) = $this->marketingCampaignsIdFormsSubmittedCountGetWithHttpInfo($id, $conditions);
        return $response;
    }

    /**
     * Operation marketingCampaignsIdFormsSubmittedCountGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Marketing\Model\Count, HTTP status code, HTTP response headers (array of strings)
     */
    public function marketingCampaignsIdFormsSubmittedCountGetWithHttpInfo($id, $conditions = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling marketingCampaignsIdFormsSubmittedCountGet');
        }
        // parse inputs
        $resourcePath = "/marketing/campaigns/{id}/formsSubmitted/count";
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
                '\Spinen\ConnectWise\Clients\Marketing\Model\Count',
                '/marketing/campaigns/{id}/formsSubmitted/count'
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
     * Operation marketingCampaignsIdFormsSubmittedFormSubmittedIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $form_submitted_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return void
     */
    public function marketingCampaignsIdFormsSubmittedFormSubmittedIdDelete($id, $form_submitted_id)
    {
        list($response) = $this->marketingCampaignsIdFormsSubmittedFormSubmittedIdDeleteWithHttpInfo($id, $form_submitted_id);
        return $response;
    }

    /**
     * Operation marketingCampaignsIdFormsSubmittedFormSubmittedIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $form_submitted_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function marketingCampaignsIdFormsSubmittedFormSubmittedIdDeleteWithHttpInfo($id, $form_submitted_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling marketingCampaignsIdFormsSubmittedFormSubmittedIdDelete');
        }
        // verify the required parameter 'form_submitted_id' is set
        if ($form_submitted_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $form_submitted_id when calling marketingCampaignsIdFormsSubmittedFormSubmittedIdDelete');
        }
        // parse inputs
        $resourcePath = "/marketing/campaigns/{id}/formsSubmitted/{formSubmittedId}";
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
        // path params
        if ($form_submitted_id !== null) {
            $resourcePath = str_replace(
                "{" . "formSubmittedId" . "}",
                $this->apiClient->getSerializer()->toPathValue($form_submitted_id),
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
                '/marketing/campaigns/{id}/formsSubmitted/{formSubmittedId}'
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
     * Operation marketingCampaignsIdFormsSubmittedFormSubmittedIdGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $form_submitted_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted
     */
    public function marketingCampaignsIdFormsSubmittedFormSubmittedIdGet($id, $form_submitted_id)
    {
        list($response) = $this->marketingCampaignsIdFormsSubmittedFormSubmittedIdGetWithHttpInfo($id, $form_submitted_id);
        return $response;
    }

    /**
     * Operation marketingCampaignsIdFormsSubmittedFormSubmittedIdGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $form_submitted_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted, HTTP status code, HTTP response headers (array of strings)
     */
    public function marketingCampaignsIdFormsSubmittedFormSubmittedIdGetWithHttpInfo($id, $form_submitted_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling marketingCampaignsIdFormsSubmittedFormSubmittedIdGet');
        }
        // verify the required parameter 'form_submitted_id' is set
        if ($form_submitted_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $form_submitted_id when calling marketingCampaignsIdFormsSubmittedFormSubmittedIdGet');
        }
        // parse inputs
        $resourcePath = "/marketing/campaigns/{id}/formsSubmitted/{formSubmittedId}";
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
        // path params
        if ($form_submitted_id !== null) {
            $resourcePath = str_replace(
                "{" . "formSubmittedId" . "}",
                $this->apiClient->getSerializer()->toPathValue($form_submitted_id),
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
                '\Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted',
                '/marketing/campaigns/{id}/formsSubmitted/{formSubmittedId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted', $e->getResponseHeaders());
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
     * Operation marketingCampaignsIdFormsSubmittedFormSubmittedIdPatch
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $form_submitted_id  (required)
     * @param \Spinen\ConnectWise\Clients\Marketing\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted
     */
    public function marketingCampaignsIdFormsSubmittedFormSubmittedIdPatch($id, $form_submitted_id, $operations)
    {
        list($response) = $this->marketingCampaignsIdFormsSubmittedFormSubmittedIdPatchWithHttpInfo($id, $form_submitted_id, $operations);
        return $response;
    }

    /**
     * Operation marketingCampaignsIdFormsSubmittedFormSubmittedIdPatchWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $form_submitted_id  (required)
     * @param \Spinen\ConnectWise\Clients\Marketing\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted, HTTP status code, HTTP response headers (array of strings)
     */
    public function marketingCampaignsIdFormsSubmittedFormSubmittedIdPatchWithHttpInfo($id, $form_submitted_id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling marketingCampaignsIdFormsSubmittedFormSubmittedIdPatch');
        }
        // verify the required parameter 'form_submitted_id' is set
        if ($form_submitted_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $form_submitted_id when calling marketingCampaignsIdFormsSubmittedFormSubmittedIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling marketingCampaignsIdFormsSubmittedFormSubmittedIdPatch');
        }
        // parse inputs
        $resourcePath = "/marketing/campaigns/{id}/formsSubmitted/{formSubmittedId}";
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
        // path params
        if ($form_submitted_id !== null) {
            $resourcePath = str_replace(
                "{" . "formSubmittedId" . "}",
                $this->apiClient->getSerializer()->toPathValue($form_submitted_id),
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
                '\Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted',
                '/marketing/campaigns/{id}/formsSubmitted/{formSubmittedId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted', $e->getResponseHeaders());
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
     * Operation marketingCampaignsIdFormsSubmittedFormSubmittedIdPut
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $form_submitted_id  (required)
     * @param \Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted $form_submitted  (required)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted
     */
    public function marketingCampaignsIdFormsSubmittedFormSubmittedIdPut($id, $form_submitted_id, $form_submitted)
    {
        list($response) = $this->marketingCampaignsIdFormsSubmittedFormSubmittedIdPutWithHttpInfo($id, $form_submitted_id, $form_submitted);
        return $response;
    }

    /**
     * Operation marketingCampaignsIdFormsSubmittedFormSubmittedIdPutWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $form_submitted_id  (required)
     * @param \Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted $form_submitted  (required)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted, HTTP status code, HTTP response headers (array of strings)
     */
    public function marketingCampaignsIdFormsSubmittedFormSubmittedIdPutWithHttpInfo($id, $form_submitted_id, $form_submitted)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling marketingCampaignsIdFormsSubmittedFormSubmittedIdPut');
        }
        // verify the required parameter 'form_submitted_id' is set
        if ($form_submitted_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $form_submitted_id when calling marketingCampaignsIdFormsSubmittedFormSubmittedIdPut');
        }
        // verify the required parameter 'form_submitted' is set
        if ($form_submitted === null) {
            throw new \InvalidArgumentException('Missing the required parameter $form_submitted when calling marketingCampaignsIdFormsSubmittedFormSubmittedIdPut');
        }
        // parse inputs
        $resourcePath = "/marketing/campaigns/{id}/formsSubmitted/{formSubmittedId}";
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
        // path params
        if ($form_submitted_id !== null) {
            $resourcePath = str_replace(
                "{" . "formSubmittedId" . "}",
                $this->apiClient->getSerializer()->toPathValue($form_submitted_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($form_submitted)) {
            $_tempBody = $form_submitted;
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
                '\Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted',
                '/marketing/campaigns/{id}/formsSubmitted/{formSubmittedId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted', $e->getResponseHeaders());
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
     * Operation marketingCampaignsIdFormsSubmittedGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted[]
     */
    public function marketingCampaignsIdFormsSubmittedGet($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->marketingCampaignsIdFormsSubmittedGetWithHttpInfo($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation marketingCampaignsIdFormsSubmittedGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted[], HTTP status code, HTTP response headers (array of strings)
     */
    public function marketingCampaignsIdFormsSubmittedGetWithHttpInfo($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling marketingCampaignsIdFormsSubmittedGet');
        }
        // parse inputs
        $resourcePath = "/marketing/campaigns/{id}/formsSubmitted";
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
                '\Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted[]',
                '/marketing/campaigns/{id}/formsSubmitted'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted[]', $e->getResponseHeaders());
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
     * Operation marketingCampaignsIdFormsSubmittedPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted $form_submitted  (required)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted
     */
    public function marketingCampaignsIdFormsSubmittedPost($id, $form_submitted)
    {
        list($response) = $this->marketingCampaignsIdFormsSubmittedPostWithHttpInfo($id, $form_submitted);
        return $response;
    }

    /**
     * Operation marketingCampaignsIdFormsSubmittedPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Marketing API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted $form_submitted  (required)
     * @throws \Spinen\ConnectWise\Clients\Marketing\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted, HTTP status code, HTTP response headers (array of strings)
     */
    public function marketingCampaignsIdFormsSubmittedPostWithHttpInfo($id, $form_submitted)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling marketingCampaignsIdFormsSubmittedPost');
        }
        // verify the required parameter 'form_submitted' is set
        if ($form_submitted === null) {
            throw new \InvalidArgumentException('Missing the required parameter $form_submitted when calling marketingCampaignsIdFormsSubmittedPost');
        }
        // parse inputs
        $resourcePath = "/marketing/campaigns/{id}/formsSubmitted";
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
        if (isset($form_submitted)) {
            $_tempBody = $form_submitted;
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
                '\Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted',
                '/marketing/campaigns/{id}/formsSubmitted'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Marketing\Model\FormSubmitted', $e->getResponseHeaders());
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