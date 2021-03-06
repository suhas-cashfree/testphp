<?php
/**
 * CFPaymentsEntityMethod
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * New Payment Gateway APIs
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 2022-01-01
 * Contact: nextgenapi@cashfree.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CFPaymentsEntityMethod Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CFPaymentsEntityMethod implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CFPaymentsEntityMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'channel' => 'string',
        'card_number' => 'string',
        'card_network' => 'string',
        'card_type' => 'string',
        'card_country' => 'string',
        'card_bank_name' => 'string',
        'netbanking_bank_code' => 'string',
        'netbanking_bank_name' => 'string',
        'upi_id' => 'string',
        'provider' => 'string',
        'phone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'channel' => null,
        'card_number' => null,
        'card_network' => null,
        'card_type' => null,
        'card_country' => null,
        'card_bank_name' => null,
        'netbanking_bank_code' => null,
        'netbanking_bank_name' => null,
        'upi_id' => null,
        'provider' => null,
        'phone' => null
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
        'channel' => 'channel',
        'card_number' => 'card_number',
        'card_network' => 'card_network',
        'card_type' => 'card_type',
        'card_country' => 'card_country',
        'card_bank_name' => 'card_bank_name',
        'netbanking_bank_code' => 'netbanking_bank_code',
        'netbanking_bank_name' => 'netbanking_bank_name',
        'upi_id' => 'upi_id',
        'provider' => 'provider',
        'phone' => 'phone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channel' => 'setChannel',
        'card_number' => 'setCardNumber',
        'card_network' => 'setCardNetwork',
        'card_type' => 'setCardType',
        'card_country' => 'setCardCountry',
        'card_bank_name' => 'setCardBankName',
        'netbanking_bank_code' => 'setNetbankingBankCode',
        'netbanking_bank_name' => 'setNetbankingBankName',
        'upi_id' => 'setUpiId',
        'provider' => 'setProvider',
        'phone' => 'setPhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channel' => 'getChannel',
        'card_number' => 'getCardNumber',
        'card_network' => 'getCardNetwork',
        'card_type' => 'getCardType',
        'card_country' => 'getCardCountry',
        'card_bank_name' => 'getCardBankName',
        'netbanking_bank_code' => 'getNetbankingBankCode',
        'netbanking_bank_name' => 'getNetbankingBankName',
        'upi_id' => 'getUpiId',
        'provider' => 'getProvider',
        'phone' => 'getPhone'
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
        $this->container['channel'] = $data['channel'] ?? null;
        $this->container['card_number'] = $data['card_number'] ?? null;
        $this->container['card_network'] = $data['card_network'] ?? null;
        $this->container['card_type'] = $data['card_type'] ?? null;
        $this->container['card_country'] = $data['card_country'] ?? null;
        $this->container['card_bank_name'] = $data['card_bank_name'] ?? null;
        $this->container['netbanking_bank_code'] = $data['netbanking_bank_code'] ?? null;
        $this->container['netbanking_bank_name'] = $data['netbanking_bank_name'] ?? null;
        $this->container['upi_id'] = $data['upi_id'] ?? null;
        $this->container['provider'] = $data['provider'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['channel'] === null) {
            $invalidProperties[] = "'channel' can't be null";
        }
        if ($this->container['netbanking_bank_code'] === null) {
            $invalidProperties[] = "'netbanking_bank_code' can't be null";
        }
        if ($this->container['netbanking_bank_name'] === null) {
            $invalidProperties[] = "'netbanking_bank_name' can't be null";
        }
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
     * Gets channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param string $channel channel
     *
     * @return self
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets card_number
     *
     * @return string|null
     */
    public function getCardNumber()
    {
        return $this->container['card_number'];
    }

    /**
     * Sets card_number
     *
     * @param string|null $card_number card_number
     *
     * @return self
     */
    public function setCardNumber($card_number)
    {
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets card_network
     *
     * @return string|null
     */
    public function getCardNetwork()
    {
        return $this->container['card_network'];
    }

    /**
     * Sets card_network
     *
     * @param string|null $card_network card_network
     *
     * @return self
     */
    public function setCardNetwork($card_network)
    {
        $this->container['card_network'] = $card_network;

        return $this;
    }

    /**
     * Gets card_type
     *
     * @return string|null
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param string|null $card_type card_type
     *
     * @return self
     */
    public function setCardType($card_type)
    {
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets card_country
     *
     * @return string|null
     */
    public function getCardCountry()
    {
        return $this->container['card_country'];
    }

    /**
     * Sets card_country
     *
     * @param string|null $card_country card_country
     *
     * @return self
     */
    public function setCardCountry($card_country)
    {
        $this->container['card_country'] = $card_country;

        return $this;
    }

    /**
     * Gets card_bank_name
     *
     * @return string|null
     */
    public function getCardBankName()
    {
        return $this->container['card_bank_name'];
    }

    /**
     * Sets card_bank_name
     *
     * @param string|null $card_bank_name card_bank_name
     *
     * @return self
     */
    public function setCardBankName($card_bank_name)
    {
        $this->container['card_bank_name'] = $card_bank_name;

        return $this;
    }

    /**
     * Gets netbanking_bank_code
     *
     * @return string
     */
    public function getNetbankingBankCode()
    {
        return $this->container['netbanking_bank_code'];
    }

    /**
     * Sets netbanking_bank_code
     *
     * @param string $netbanking_bank_code netbanking_bank_code
     *
     * @return self
     */
    public function setNetbankingBankCode($netbanking_bank_code)
    {
        $this->container['netbanking_bank_code'] = $netbanking_bank_code;

        return $this;
    }

    /**
     * Gets netbanking_bank_name
     *
     * @return string
     */
    public function getNetbankingBankName()
    {
        return $this->container['netbanking_bank_name'];
    }

    /**
     * Sets netbanking_bank_name
     *
     * @param string $netbanking_bank_name netbanking_bank_name
     *
     * @return self
     */
    public function setNetbankingBankName($netbanking_bank_name)
    {
        $this->container['netbanking_bank_name'] = $netbanking_bank_name;

        return $this;
    }

    /**
     * Gets upi_id
     *
     * @return string|null
     */
    public function getUpiId()
    {
        return $this->container['upi_id'];
    }

    /**
     * Sets upi_id
     *
     * @param string|null $upi_id upi_id
     *
     * @return self
     */
    public function setUpiId($upi_id)
    {
        $this->container['upi_id'] = $upi_id;

        return $this;
    }

    /**
     * Gets provider
     *
     * @return string|null
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param string|null $provider provider
     *
     * @return self
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


