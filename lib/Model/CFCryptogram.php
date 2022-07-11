<?php
/**
 * CFCryptogram
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
 * CFCryptogram Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CFCryptogram implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CFCryptogram';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'instrument_id' => 'string',
        'token_requestor_id' => 'string',
        'card_number' => 'string',
        'card_expiry_mm' => 'string',
        'card_expiry_yy' => 'string',
        'cryptogram' => 'string',
        'card_display' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'instrument_id' => null,
        'token_requestor_id' => null,
        'card_number' => null,
        'card_expiry_mm' => null,
        'card_expiry_yy' => null,
        'cryptogram' => null,
        'card_display' => null
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
        'instrument_id' => 'instrument_id',
        'token_requestor_id' => 'token_requestor_id',
        'card_number' => 'card_number',
        'card_expiry_mm' => 'card_expiry_mm',
        'card_expiry_yy' => 'card_expiry_yy',
        'cryptogram' => 'cryptogram',
        'card_display' => 'card_display'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'instrument_id' => 'setInstrumentId',
        'token_requestor_id' => 'setTokenRequestorId',
        'card_number' => 'setCardNumber',
        'card_expiry_mm' => 'setCardExpiryMm',
        'card_expiry_yy' => 'setCardExpiryYy',
        'cryptogram' => 'setCryptogram',
        'card_display' => 'setCardDisplay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'instrument_id' => 'getInstrumentId',
        'token_requestor_id' => 'getTokenRequestorId',
        'card_number' => 'getCardNumber',
        'card_expiry_mm' => 'getCardExpiryMm',
        'card_expiry_yy' => 'getCardExpiryYy',
        'cryptogram' => 'getCryptogram',
        'card_display' => 'getCardDisplay'
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
        $this->container['instrument_id'] = $data['instrument_id'] ?? null;
        $this->container['token_requestor_id'] = $data['token_requestor_id'] ?? null;
        $this->container['card_number'] = $data['card_number'] ?? null;
        $this->container['card_expiry_mm'] = $data['card_expiry_mm'] ?? null;
        $this->container['card_expiry_yy'] = $data['card_expiry_yy'] ?? null;
        $this->container['cryptogram'] = $data['cryptogram'] ?? null;
        $this->container['card_display'] = $data['card_display'] ?? null;
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
     * Gets instrument_id
     *
     * @return string|null
     */
    public function getInstrumentId()
    {
        return $this->container['instrument_id'];
    }

    /**
     * Sets instrument_id
     *
     * @param string|null $instrument_id instrument_id of saved instrument
     *
     * @return self
     */
    public function setInstrumentId($instrument_id)
    {
        $this->container['instrument_id'] = $instrument_id;

        return $this;
    }

    /**
     * Gets token_requestor_id
     *
     * @return string|null
     */
    public function getTokenRequestorId()
    {
        return $this->container['token_requestor_id'];
    }

    /**
     * Sets token_requestor_id
     *
     * @param string|null $token_requestor_id TRID issued by card networks
     *
     * @return self
     */
    public function setTokenRequestorId($token_requestor_id)
    {
        $this->container['token_requestor_id'] = $token_requestor_id;

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
     * @param string|null $card_number token pan number
     *
     * @return self
     */
    public function setCardNumber($card_number)
    {
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets card_expiry_mm
     *
     * @return string|null
     */
    public function getCardExpiryMm()
    {
        return $this->container['card_expiry_mm'];
    }

    /**
     * Sets card_expiry_mm
     *
     * @param string|null $card_expiry_mm token pan expiry month
     *
     * @return self
     */
    public function setCardExpiryMm($card_expiry_mm)
    {
        $this->container['card_expiry_mm'] = $card_expiry_mm;

        return $this;
    }

    /**
     * Gets card_expiry_yy
     *
     * @return string|null
     */
    public function getCardExpiryYy()
    {
        return $this->container['card_expiry_yy'];
    }

    /**
     * Sets card_expiry_yy
     *
     * @param string|null $card_expiry_yy token pan expiry year
     *
     * @return self
     */
    public function setCardExpiryYy($card_expiry_yy)
    {
        $this->container['card_expiry_yy'] = $card_expiry_yy;

        return $this;
    }

    /**
     * Gets cryptogram
     *
     * @return string|null
     */
    public function getCryptogram()
    {
        return $this->container['cryptogram'];
    }

    /**
     * Sets cryptogram
     *
     * @param string|null $cryptogram cryptogram
     *
     * @return self
     */
    public function setCryptogram($cryptogram)
    {
        $this->container['cryptogram'] = $cryptogram;

        return $this;
    }

    /**
     * Gets card_display
     *
     * @return string|null
     */
    public function getCardDisplay()
    {
        return $this->container['card_display'];
    }

    /**
     * Sets card_display
     *
     * @param string|null $card_display last 4 digits of original card number
     *
     * @return self
     */
    public function setCardDisplay($card_display)
    {
        $this->container['card_display'] = $card_display;

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


