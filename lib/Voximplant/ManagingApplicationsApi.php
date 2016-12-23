<?php
/**
 * ManagingApplicationsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Voximplant HTTP API
 *
 * Voximplant HTTP API description
 *
 * OpenAPI spec version: 1.0.0
 * Contact: info@voximplant.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Voximplant;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * ManagingApplicationsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ManagingApplicationsApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.voximplant.com/platform_api/');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return ManagingApplicationsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addApplication
     *
     * 
     *
     * @param string $application_name The short application name in format [a-z][a-z0-9-]{1,79} (required)
     * @param bool $im_enabled Is the instant messaging (IM) enabled? (optional)
     * @param string $im_roster_type The roster type (IM users list type). The following values are possible: personal, group. (optional)
     * @param bool $busy_on_call The busy_on_call flag. (optional)
     * @return \Voximplant\InlineResponse2003
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function addApplication($application_name, $im_enabled = null, $im_roster_type = null, $busy_on_call = null)
    {
        list($response) = $this->addApplicationWithHttpInfo($application_name, $im_enabled, $im_roster_type, $busy_on_call);
        return $response;
    }

    /**
     * Operation addApplicationWithHttpInfo
     *
     * 
     *
     * @param string $application_name The short application name in format [a-z][a-z0-9-]{1,79} (required)
     * @param bool $im_enabled Is the instant messaging (IM) enabled? (optional)
     * @param string $im_roster_type The roster type (IM users list type). The following values are possible: personal, group. (optional)
     * @param bool $busy_on_call The busy_on_call flag. (optional)
     * @return Array of \Voximplant\InlineResponse2003, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function addApplicationWithHttpInfo($application_name, $im_enabled = null, $im_roster_type = null, $busy_on_call = null)
    {
        // verify the required parameter 'application_name' is set
        if ($application_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $application_name when calling addApplication');
        }
        // parse inputs
        $resourcePath = "/AddApplication";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($application_name !== null) {
            $formParams['application_name'] = $this->apiClient->getSerializer()->toFormValue($application_name);
        }
        // form params
        if ($im_enabled !== null) {
            $formParams['im_enabled'] = $this->apiClient->getSerializer()->toFormValue($im_enabled);
        }
        // form params
        if ($im_roster_type !== null) {
            $formParams['im_roster_type'] = $this->apiClient->getSerializer()->toFormValue($im_roster_type);
        }
        // form params
        if ($busy_on_call !== null) {
            $formParams['busy_on_call'] = $this->apiClient->getSerializer()->toFormValue($busy_on_call);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Voximplant\InlineResponse2003',
                '/AddApplication'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Voximplant\InlineResponse2003', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Voximplant\InlineResponse2003', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation delApplication
     *
     * 
     *
     * @param string $application_id The application ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param string $application_name The application name list separated by the &#x60;;&#x60; symbol. Can be used instead of &lt;b&gt;appliction_id&lt;/b&gt;. (optional)
     * @return \Voximplant\InlineResponse200
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function delApplication($application_id = null, $application_name = null)
    {
        list($response) = $this->delApplicationWithHttpInfo($application_id, $application_name);
        return $response;
    }

    /**
     * Operation delApplicationWithHttpInfo
     *
     * 
     *
     * @param string $application_id The application ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param string $application_name The application name list separated by the &#x60;;&#x60; symbol. Can be used instead of &lt;b&gt;appliction_id&lt;/b&gt;. (optional)
     * @return Array of \Voximplant\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function delApplicationWithHttpInfo($application_id = null, $application_name = null)
    {
        // parse inputs
        $resourcePath = "/DelApplication";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($application_id !== null) {
            $formParams['application_id'] = $this->apiClient->getSerializer()->toFormValue($application_id);
        }
        // form params
        if ($application_name !== null) {
            $formParams['application_name'] = $this->apiClient->getSerializer()->toFormValue($application_name);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Voximplant\InlineResponse200',
                '/DelApplication'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Voximplant\InlineResponse200', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Voximplant\InlineResponse200', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getApplications
     *
     * 
     *
     * @param float $application_id The application ID to filter. (optional)
     * @param string $application_name The application name part to filter. (optional)
     * @param bool $im_enabled Is the instant messaging (IM) enabled? (optional)
     * @param string $im_roster_type The roster type (IM users list type) to filter. The following values are possible: personal, group. (optional)
     * @param float $user_id The binding user ID to filter. (optional)
     * @param float $excluded_user_id The excluded binding user ID to filter. (optional)
     * @param float $showing_user_id Specify the binding user ID value to show it in the &#x60;users&#x60; array output. (optional)
     * @param bool $with_rules Set true to get binding rules info. (optional)
     * @param bool $with_scenarios Set true to get binding rules and scenarios info. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return \Voximplant\InlineResponse20028
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getApplications($application_id = null, $application_name = null, $im_enabled = null, $im_roster_type = null, $user_id = null, $excluded_user_id = null, $showing_user_id = null, $with_rules = null, $with_scenarios = null, $count = null, $offset = null)
    {
        list($response) = $this->getApplicationsWithHttpInfo($application_id, $application_name, $im_enabled, $im_roster_type, $user_id, $excluded_user_id, $showing_user_id, $with_rules, $with_scenarios, $count, $offset);
        return $response;
    }

    /**
     * Operation getApplicationsWithHttpInfo
     *
     * 
     *
     * @param float $application_id The application ID to filter. (optional)
     * @param string $application_name The application name part to filter. (optional)
     * @param bool $im_enabled Is the instant messaging (IM) enabled? (optional)
     * @param string $im_roster_type The roster type (IM users list type) to filter. The following values are possible: personal, group. (optional)
     * @param float $user_id The binding user ID to filter. (optional)
     * @param float $excluded_user_id The excluded binding user ID to filter. (optional)
     * @param float $showing_user_id Specify the binding user ID value to show it in the &#x60;users&#x60; array output. (optional)
     * @param bool $with_rules Set true to get binding rules info. (optional)
     * @param bool $with_scenarios Set true to get binding rules and scenarios info. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return Array of \Voximplant\InlineResponse20028, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getApplicationsWithHttpInfo($application_id = null, $application_name = null, $im_enabled = null, $im_roster_type = null, $user_id = null, $excluded_user_id = null, $showing_user_id = null, $with_rules = null, $with_scenarios = null, $count = null, $offset = null)
    {
        // parse inputs
        $resourcePath = "/GetApplications";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($application_id !== null) {
            $formParams['application_id'] = $this->apiClient->getSerializer()->toFormValue($application_id);
        }
        // form params
        if ($application_name !== null) {
            $formParams['application_name'] = $this->apiClient->getSerializer()->toFormValue($application_name);
        }
        // form params
        if ($im_enabled !== null) {
            $formParams['im_enabled'] = $this->apiClient->getSerializer()->toFormValue($im_enabled);
        }
        // form params
        if ($im_roster_type !== null) {
            $formParams['im_roster_type'] = $this->apiClient->getSerializer()->toFormValue($im_roster_type);
        }
        // form params
        if ($user_id !== null) {
            $formParams['user_id'] = $this->apiClient->getSerializer()->toFormValue($user_id);
        }
        // form params
        if ($excluded_user_id !== null) {
            $formParams['excluded_user_id'] = $this->apiClient->getSerializer()->toFormValue($excluded_user_id);
        }
        // form params
        if ($showing_user_id !== null) {
            $formParams['showing_user_id'] = $this->apiClient->getSerializer()->toFormValue($showing_user_id);
        }
        // form params
        if ($with_rules !== null) {
            $formParams['with_rules'] = $this->apiClient->getSerializer()->toFormValue($with_rules);
        }
        // form params
        if ($with_scenarios !== null) {
            $formParams['with_scenarios'] = $this->apiClient->getSerializer()->toFormValue($with_scenarios);
        }
        // form params
        if ($count !== null) {
            $formParams['count'] = $this->apiClient->getSerializer()->toFormValue($count);
        }
        // form params
        if ($offset !== null) {
            $formParams['offset'] = $this->apiClient->getSerializer()->toFormValue($offset);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Voximplant\InlineResponse20028',
                '/GetApplications'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Voximplant\InlineResponse20028', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Voximplant\InlineResponse20028', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setApplicationInfo
     *
     * 
     *
     * @param float $application_id The application ID. (optional)
     * @param string $required_application_name Can be used instead of &lt;b&gt;application_id&lt;/b&gt;. (optional)
     * @param string $application_name The new short application name in format [a-z][a-z0-9-]{1,79} (optional)
     * @param bool $im_enabled Is the instant messaging (IM) enabled? (optional)
     * @param string $im_roster_type The roster type (IM users list type). The following values are possible: personal, group. (optional)
     * @param bool $busy_on_call The busy_on_call flag. (optional)
     * @return \Voximplant\InlineResponse20063
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function setApplicationInfo($application_id = null, $required_application_name = null, $application_name = null, $im_enabled = null, $im_roster_type = null, $busy_on_call = null)
    {
        list($response) = $this->setApplicationInfoWithHttpInfo($application_id, $required_application_name, $application_name, $im_enabled, $im_roster_type, $busy_on_call);
        return $response;
    }

    /**
     * Operation setApplicationInfoWithHttpInfo
     *
     * 
     *
     * @param float $application_id The application ID. (optional)
     * @param string $required_application_name Can be used instead of &lt;b&gt;application_id&lt;/b&gt;. (optional)
     * @param string $application_name The new short application name in format [a-z][a-z0-9-]{1,79} (optional)
     * @param bool $im_enabled Is the instant messaging (IM) enabled? (optional)
     * @param string $im_roster_type The roster type (IM users list type). The following values are possible: personal, group. (optional)
     * @param bool $busy_on_call The busy_on_call flag. (optional)
     * @return Array of \Voximplant\InlineResponse20063, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function setApplicationInfoWithHttpInfo($application_id = null, $required_application_name = null, $application_name = null, $im_enabled = null, $im_roster_type = null, $busy_on_call = null)
    {
        // parse inputs
        $resourcePath = "/SetApplicationInfo";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($application_id !== null) {
            $formParams['application_id'] = $this->apiClient->getSerializer()->toFormValue($application_id);
        }
        // form params
        if ($required_application_name !== null) {
            $formParams['required_application_name'] = $this->apiClient->getSerializer()->toFormValue($required_application_name);
        }
        // form params
        if ($application_name !== null) {
            $formParams['application_name'] = $this->apiClient->getSerializer()->toFormValue($application_name);
        }
        // form params
        if ($im_enabled !== null) {
            $formParams['im_enabled'] = $this->apiClient->getSerializer()->toFormValue($im_enabled);
        }
        // form params
        if ($im_roster_type !== null) {
            $formParams['im_roster_type'] = $this->apiClient->getSerializer()->toFormValue($im_roster_type);
        }
        // form params
        if ($busy_on_call !== null) {
            $formParams['busy_on_call'] = $this->apiClient->getSerializer()->toFormValue($busy_on_call);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Voximplant\InlineResponse20063',
                '/SetApplicationInfo'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Voximplant\InlineResponse20063', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Voximplant\InlineResponse20063', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
