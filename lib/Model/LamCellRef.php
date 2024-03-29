<?php
/**
 * LamCellRef
 *
 * PHP version 5
 *
 * @category Class
 * @package  Thip
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ThiemeMeulenhoff Content API
 *
 * Concept of an API to get the content from the publication service.
 *
 * OpenAPI spec version: 0.8.5
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Thip\Model;

use \ArrayAccess;
use \Thip\ObjectSerializer;

/**
 * LamCellRef Class Doc Comment
 *
 * @category Class
 * @package  Thip
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LamCellRef implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LamCellRef';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'learning_goals' => 'string',
        'learning_process' => 'string',
        'working_process' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'learning_goals' => null,
        'learning_process' => null,
        'working_process' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'learning_goals' => 'learningGoals',
        'learning_process' => 'learningProcess',
        'working_process' => 'workingProcess'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'learning_goals' => 'setLearningGoals',
        'learning_process' => 'setLearningProcess',
        'working_process' => 'setWorkingProcess'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'learning_goals' => 'getLearningGoals',
        'learning_process' => 'getLearningProcess',
        'working_process' => 'getWorkingProcess'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['learning_goals'] = isset($data['learning_goals']) ? $data['learning_goals'] : null;
        $this->container['learning_process'] = isset($data['learning_process']) ? $data['learning_process'] : null;
        $this->container['working_process'] = isset($data['working_process']) ? $data['working_process'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets learning_goals
     *
     * @return string|null
     */
    public function getLearningGoals()
    {
        return $this->container['learning_goals'];
    }

    /**
     * Sets learning_goals
     *
     * @param string|null $learning_goals learning_goals
     *
     * @return $this
     */
    public function setLearningGoals($learning_goals)
    {
        $this->container['learning_goals'] = $learning_goals;

        return $this;
    }

    /**
     * Gets learning_process
     *
     * @return string|null
     */
    public function getLearningProcess()
    {
        return $this->container['learning_process'];
    }

    /**
     * Sets learning_process
     *
     * @param string|null $learning_process learning_process
     *
     * @return $this
     */
    public function setLearningProcess($learning_process)
    {
        $this->container['learning_process'] = $learning_process;

        return $this;
    }

    /**
     * Gets working_process
     *
     * @return string|null
     */
    public function getWorkingProcess()
    {
        return $this->container['working_process'];
    }

    /**
     * Sets working_process
     *
     * @param string|null $working_process working_process
     *
     * @return $this
     */
    public function setWorkingProcess($working_process)
    {
        $this->container['working_process'] = $working_process;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


