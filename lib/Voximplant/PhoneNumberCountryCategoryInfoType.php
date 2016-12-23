<?php
/**
 * PhoneNumberCountryCategoryInfoType
 *
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

use \ArrayAccess;

/**
 * PhoneNumberCountryCategoryInfoType Class Doc Comment
 *
 * @category    Class */
 // @description The &#39;phone_categories&#39; element of the GetPhoneNumberCategories function result.
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PhoneNumberCountryCategoryInfoType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PhoneNumberCountryCategoryInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'phone_category_name' => 'string',
        'country_has_states' => 'bool'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'phone_category_name' => 'phone_category_name',
        'country_has_states' => 'country_has_states'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'phone_category_name' => 'setPhoneCategoryName',
        'country_has_states' => 'setCountryHasStates'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'phone_category_name' => 'getPhoneCategoryName',
        'country_has_states' => 'getCountryHasStates'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['phone_category_name'] = isset($data['phone_category_name']) ? $data['phone_category_name'] : null;
        $this->container['country_has_states'] = isset($data['country_has_states']) ? $data['country_has_states'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['phone_category_name'] === null) {
            $invalid_properties[] = "'phone_category_name' can't be null";
        }
        if ($this->container['country_has_states'] === null) {
            $invalid_properties[] = "'country_has_states' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['phone_category_name'] === null) {
            return false;
        }
        if ($this->container['country_has_states'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets phone_category_name
     * @return string
     */
    public function getPhoneCategoryName()
    {
        return $this->container['phone_category_name'];
    }

    /**
     * Sets phone_category_name
     * @param string $phone_category_name The phone category name.
     * @return $this
     */
    public function setPhoneCategoryName($phone_category_name)
    {
        $this->container['phone_category_name'] = $phone_category_name;

        return $this;
    }

    /**
     * Gets country_has_states
     * @return bool
     */
    public function getCountryHasStates()
    {
        return $this->container['country_has_states'];
    }

    /**
     * Sets country_has_states
     * @param bool $country_has_states True if a country state is used to choose the phone with the category.
     * @return $this
     */
    public function setCountryHasStates($country_has_states)
    {
        $this->container['country_has_states'] = $country_has_states;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


