<?php
/**
 * ManagingRulesApi
 * PHP version 5
 *
 * @category Class
 * @package  Voximplant
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

namespace Swagger\Client\Api;

use \Voximplant\Configuration;
use \Voximplant\ApiClient;
use \Voximplant\ApiException;
use \Voximplant\ObjectSerializer;

/**
 * ManagingRulesApi Class Doc Comment
 *
 * @category Class
 * @package  Voximplant
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ManagingRulesApi
{

    /**
     * API Client
     *
     * @var \Voximplant\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Voximplant\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Voximplant\ApiClient $apiClient = null)
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
     * @return \Voximplant\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Voximplant\ApiClient $apiClient set the API client
     *
     * @return ManagingRulesApi
     */
    public function setApiClient(\Voximplant\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addRule
     *
     * 
     *
     * @param string $rule_name The rule name. The length must be less than 512 (required)
     * @param string $rule_pattern The rule pattern regex. The length must be less than 64 KB. (required)
     * @param float $application_id The application ID. (optional)
     * @param string $application_name The application name, can be used instead of &lt;b&gt;application_id&lt;/b&gt;. (optional)
     * @param string $rule_pattern_exclude The exclude pattern regex. The length must be less than 64 KB. (optional)
     * @param string $scenario_id The scenario ID list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $scenario_name Can be used instead of &lt;b&gt;scenario_id&lt;/b&gt;. The scenario name list separated by the &#x60;;&#x60; symbol. (optional)
     * @return \Swagger\Client\Model\InlineResponse2008
     * @throws \Voximplant\ApiException on non-2xx response
     */
    public function addRule($rule_name, $rule_pattern, $application_id = null, $application_name = null, $rule_pattern_exclude = null, $scenario_id = null, $scenario_name = null)
    {
        list($response) = $this->addRuleWithHttpInfo($rule_name, $rule_pattern, $application_id, $application_name, $rule_pattern_exclude, $scenario_id, $scenario_name);
        return $response;
    }

    /**
     * Operation addRuleWithHttpInfo
     *
     * 
     *
     * @param string $rule_name The rule name. The length must be less than 512 (required)
     * @param string $rule_pattern The rule pattern regex. The length must be less than 64 KB. (required)
     * @param float $application_id The application ID. (optional)
     * @param string $application_name The application name, can be used instead of &lt;b&gt;application_id&lt;/b&gt;. (optional)
     * @param string $rule_pattern_exclude The exclude pattern regex. The length must be less than 64 KB. (optional)
     * @param string $scenario_id The scenario ID list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $scenario_name Can be used instead of &lt;b&gt;scenario_id&lt;/b&gt;. The scenario name list separated by the &#x60;;&#x60; symbol. (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse2008, HTTP status code, HTTP response headers (array of strings)
     * @throws \Voximplant\ApiException on non-2xx response
     */
    public function addRuleWithHttpInfo($rule_name, $rule_pattern, $application_id = null, $application_name = null, $rule_pattern_exclude = null, $scenario_id = null, $scenario_name = null)
    {
        // verify the required parameter 'rule_name' is set
        if ($rule_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $rule_name when calling addRule');
        }
        // verify the required parameter 'rule_pattern' is set
        if ($rule_pattern === null) {
            throw new \InvalidArgumentException('Missing the required parameter $rule_pattern when calling addRule');
        }
        // parse inputs
        $resourcePath = "/AddRule";
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
        if ($rule_name !== null) {
            $formParams['rule_name'] = $this->apiClient->getSerializer()->toFormValue($rule_name);
        }
        // form params
        if ($rule_pattern !== null) {
            $formParams['rule_pattern'] = $this->apiClient->getSerializer()->toFormValue($rule_pattern);
        }
        // form params
        if ($rule_pattern_exclude !== null) {
            $formParams['rule_pattern_exclude'] = $this->apiClient->getSerializer()->toFormValue($rule_pattern_exclude);
        }
        // form params
        if ($scenario_id !== null) {
            $formParams['scenario_id'] = $this->apiClient->getSerializer()->toFormValue($scenario_id);
        }
        // form params
        if ($scenario_name !== null) {
            $formParams['scenario_name'] = $this->apiClient->getSerializer()->toFormValue($scenario_name);
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
                '\Swagger\Client\Model\InlineResponse2008',
                '/AddRule'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2008', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2008', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation delRule
     *
     * 
     *
     * @param string $rule_id The rule ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param string $rule_name Can be used instead of &lt;b&gt;rule_id&lt;/b&gt;. The rule name list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $application_id The application ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param string $application_name Can be used instead of &lt;b&gt;application_id&lt;/b&gt;. The application name list separated by the &#x60;;&#x60; symbol. (optional)
     * @return \Swagger\Client\Model\InlineResponse200
     * @throws \Voximplant\ApiException on non-2xx response
     */
    public function delRule($rule_id = null, $rule_name = null, $application_id = null, $application_name = null)
    {
        list($response) = $this->delRuleWithHttpInfo($rule_id, $rule_name, $application_id, $application_name);
        return $response;
    }

    /**
     * Operation delRuleWithHttpInfo
     *
     * 
     *
     * @param string $rule_id The rule ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param string $rule_name Can be used instead of &lt;b&gt;rule_id&lt;/b&gt;. The rule name list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $application_id The application ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param string $application_name Can be used instead of &lt;b&gt;application_id&lt;/b&gt;. The application name list separated by the &#x60;;&#x60; symbol. (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     * @throws \Voximplant\ApiException on non-2xx response
     */
    public function delRuleWithHttpInfo($rule_id = null, $rule_name = null, $application_id = null, $application_name = null)
    {
        // parse inputs
        $resourcePath = "/DelRule";
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
        if ($rule_id !== null) {
            $formParams['rule_id'] = $this->apiClient->getSerializer()->toFormValue($rule_id);
        }
        // form params
        if ($rule_name !== null) {
            $formParams['rule_name'] = $this->apiClient->getSerializer()->toFormValue($rule_name);
        }
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
                '\Swagger\Client\Model\InlineResponse200',
                '/DelRule'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse200', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse200', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getRules
     *
     * 
     *
     * @param float $application_id The application ID. (optional)
     * @param string $application_name The application name that can be used instead of &lt;b&gt;application_id&lt;/b&gt;. (optional)
     * @param float $rule_id The rule ID to filter (optional)
     * @param string $rule_name The rule name part to filter. (optional)
     * @param string $template Search for template matching (optional)
     * @param bool $with_scenarios Set true to get binding scenarios info. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return \Swagger\Client\Model\InlineResponse20050
     * @throws \Voximplant\ApiException on non-2xx response
     */
    public function getRules($application_id = null, $application_name = null, $rule_id = null, $rule_name = null, $template = null, $with_scenarios = null, $count = null, $offset = null)
    {
        list($response) = $this->getRulesWithHttpInfo($application_id, $application_name, $rule_id, $rule_name, $template, $with_scenarios, $count, $offset);
        return $response;
    }

    /**
     * Operation getRulesWithHttpInfo
     *
     * 
     *
     * @param float $application_id The application ID. (optional)
     * @param string $application_name The application name that can be used instead of &lt;b&gt;application_id&lt;/b&gt;. (optional)
     * @param float $rule_id The rule ID to filter (optional)
     * @param string $rule_name The rule name part to filter. (optional)
     * @param string $template Search for template matching (optional)
     * @param bool $with_scenarios Set true to get binding scenarios info. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse20050, HTTP status code, HTTP response headers (array of strings)
     * @throws \Voximplant\ApiException on non-2xx response
     */
    public function getRulesWithHttpInfo($application_id = null, $application_name = null, $rule_id = null, $rule_name = null, $template = null, $with_scenarios = null, $count = null, $offset = null)
    {
        // parse inputs
        $resourcePath = "/GetRules";
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
        if ($rule_id !== null) {
            $formParams['rule_id'] = $this->apiClient->getSerializer()->toFormValue($rule_id);
        }
        // form params
        if ($rule_name !== null) {
            $formParams['rule_name'] = $this->apiClient->getSerializer()->toFormValue($rule_name);
        }
        // form params
        if ($template !== null) {
            $formParams['template'] = $this->apiClient->getSerializer()->toFormValue($template);
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
                '\Swagger\Client\Model\InlineResponse20050',
                '/GetRules'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse20050', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20050', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation reorderRules
     *
     * 
     *
     * @param string $rule_id The rule ID list separated by the &#x60;;&#x60; symbol. (required)
     * @return \Swagger\Client\Model\InlineResponse200
     * @throws \Voximplant\ApiException on non-2xx response
     */
    public function reorderRules($rule_id)
    {
        list($response) = $this->reorderRulesWithHttpInfo($rule_id);
        return $response;
    }

    /**
     * Operation reorderRulesWithHttpInfo
     *
     * 
     *
     * @param string $rule_id The rule ID list separated by the &#x60;;&#x60; symbol. (required)
     * @return Array of \Swagger\Client\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     * @throws \Voximplant\ApiException on non-2xx response
     */
    public function reorderRulesWithHttpInfo($rule_id)
    {
        // verify the required parameter 'rule_id' is set
        if ($rule_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $rule_id when calling reorderRules');
        }
        // parse inputs
        $resourcePath = "/ReorderRules";
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
        if ($rule_id !== null) {
            $formParams['rule_id'] = $this->apiClient->getSerializer()->toFormValue($rule_id);
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
                '\Swagger\Client\Model\InlineResponse200',
                '/ReorderRules'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse200', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse200', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setRuleInfo
     *
     * 
     *
     * @param float $rule_id The rule ID. (required)
     * @param string $rule_name The new rule name. The length must be less than 512 (optional)
     * @param string $rule_pattern The new rule pattern regex. The length must be less than 64 KB. (optional)
     * @param string $rule_pattern_exclude The new exclude pattern regex. The length must be less than 64 KB. (optional)
     * @return \Swagger\Client\Model\InlineResponse200
     * @throws \Voximplant\ApiException on non-2xx response
     */
    public function setRuleInfo($rule_id, $rule_name = null, $rule_pattern = null, $rule_pattern_exclude = null)
    {
        list($response) = $this->setRuleInfoWithHttpInfo($rule_id, $rule_name, $rule_pattern, $rule_pattern_exclude);
        return $response;
    }

    /**
     * Operation setRuleInfoWithHttpInfo
     *
     * 
     *
     * @param float $rule_id The rule ID. (required)
     * @param string $rule_name The new rule name. The length must be less than 512 (optional)
     * @param string $rule_pattern The new rule pattern regex. The length must be less than 64 KB. (optional)
     * @param string $rule_pattern_exclude The new exclude pattern regex. The length must be less than 64 KB. (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     * @throws \Voximplant\ApiException on non-2xx response
     */
    public function setRuleInfoWithHttpInfo($rule_id, $rule_name = null, $rule_pattern = null, $rule_pattern_exclude = null)
    {
        // verify the required parameter 'rule_id' is set
        if ($rule_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $rule_id when calling setRuleInfo');
        }
        // parse inputs
        $resourcePath = "/SetRuleInfo";
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
        if ($rule_id !== null) {
            $formParams['rule_id'] = $this->apiClient->getSerializer()->toFormValue($rule_id);
        }
        // form params
        if ($rule_name !== null) {
            $formParams['rule_name'] = $this->apiClient->getSerializer()->toFormValue($rule_name);
        }
        // form params
        if ($rule_pattern !== null) {
            $formParams['rule_pattern'] = $this->apiClient->getSerializer()->toFormValue($rule_pattern);
        }
        // form params
        if ($rule_pattern_exclude !== null) {
            $formParams['rule_pattern_exclude'] = $this->apiClient->getSerializer()->toFormValue($rule_pattern_exclude);
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
                '\Swagger\Client\Model\InlineResponse200',
                '/SetRuleInfo'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse200', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse200', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
