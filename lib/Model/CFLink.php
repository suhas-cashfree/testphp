<?php
/**
 * CFLink
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
 * CFLink Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CFLink implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CFLink';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cf_link_id' => 'int',
        'link_id' => 'string',
        'link_status' => 'string',
        'link_currency' => 'string',
        'link_amount' => 'float',
        'link_amount_paid' => 'float',
        'link_partial_payments' => 'bool',
        'link_minimum_partial_amount' => 'float',
        'link_purpose' => 'string',
        'link_created_at' => 'string',
        'customer_details' => '\OpenAPI\Client\Model\CFLinkCustomerDetailsEntity',
        'link_meta' => '\OpenAPI\Client\Model\CFLinkMetaEntity',
        'link_url' => 'string',
        'link_expiry_time' => 'string',
        'link_notes' => 'array<string,string>',
        'link_auto_reminders' => 'bool',
        'link_notify' => '\OpenAPI\Client\Model\CFLinkNotifyEntity'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cf_link_id' => null,
        'link_id' => null,
        'link_status' => null,
        'link_currency' => null,
        'link_amount' => null,
        'link_amount_paid' => null,
        'link_partial_payments' => null,
        'link_minimum_partial_amount' => null,
        'link_purpose' => null,
        'link_created_at' => null,
        'customer_details' => null,
        'link_meta' => null,
        'link_url' => null,
        'link_expiry_time' => null,
        'link_notes' => null,
        'link_auto_reminders' => null,
        'link_notify' => null
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
        'cf_link_id' => 'cf_link_id',
        'link_id' => 'link_id',
        'link_status' => 'link_status',
        'link_currency' => 'link_currency',
        'link_amount' => 'link_amount',
        'link_amount_paid' => 'link_amount_paid',
        'link_partial_payments' => 'link_partial_payments',
        'link_minimum_partial_amount' => 'link_minimum_partial_amount',
        'link_purpose' => 'link_purpose',
        'link_created_at' => 'link_created_at',
        'customer_details' => 'customer_details',
        'link_meta' => 'link_meta',
        'link_url' => 'link_url',
        'link_expiry_time' => 'link_expiry_time',
        'link_notes' => 'link_notes',
        'link_auto_reminders' => 'link_auto_reminders',
        'link_notify' => 'link_notify'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cf_link_id' => 'setCfLinkId',
        'link_id' => 'setLinkId',
        'link_status' => 'setLinkStatus',
        'link_currency' => 'setLinkCurrency',
        'link_amount' => 'setLinkAmount',
        'link_amount_paid' => 'setLinkAmountPaid',
        'link_partial_payments' => 'setLinkPartialPayments',
        'link_minimum_partial_amount' => 'setLinkMinimumPartialAmount',
        'link_purpose' => 'setLinkPurpose',
        'link_created_at' => 'setLinkCreatedAt',
        'customer_details' => 'setCustomerDetails',
        'link_meta' => 'setLinkMeta',
        'link_url' => 'setLinkUrl',
        'link_expiry_time' => 'setLinkExpiryTime',
        'link_notes' => 'setLinkNotes',
        'link_auto_reminders' => 'setLinkAutoReminders',
        'link_notify' => 'setLinkNotify'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cf_link_id' => 'getCfLinkId',
        'link_id' => 'getLinkId',
        'link_status' => 'getLinkStatus',
        'link_currency' => 'getLinkCurrency',
        'link_amount' => 'getLinkAmount',
        'link_amount_paid' => 'getLinkAmountPaid',
        'link_partial_payments' => 'getLinkPartialPayments',
        'link_minimum_partial_amount' => 'getLinkMinimumPartialAmount',
        'link_purpose' => 'getLinkPurpose',
        'link_created_at' => 'getLinkCreatedAt',
        'customer_details' => 'getCustomerDetails',
        'link_meta' => 'getLinkMeta',
        'link_url' => 'getLinkUrl',
        'link_expiry_time' => 'getLinkExpiryTime',
        'link_notes' => 'getLinkNotes',
        'link_auto_reminders' => 'getLinkAutoReminders',
        'link_notify' => 'getLinkNotify'
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
        $this->container['cf_link_id'] = $data['cf_link_id'] ?? null;
        $this->container['link_id'] = $data['link_id'] ?? null;
        $this->container['link_status'] = $data['link_status'] ?? null;
        $this->container['link_currency'] = $data['link_currency'] ?? null;
        $this->container['link_amount'] = $data['link_amount'] ?? null;
        $this->container['link_amount_paid'] = $data['link_amount_paid'] ?? null;
        $this->container['link_partial_payments'] = $data['link_partial_payments'] ?? null;
        $this->container['link_minimum_partial_amount'] = $data['link_minimum_partial_amount'] ?? null;
        $this->container['link_purpose'] = $data['link_purpose'] ?? null;
        $this->container['link_created_at'] = $data['link_created_at'] ?? null;
        $this->container['customer_details'] = $data['customer_details'] ?? null;
        $this->container['link_meta'] = $data['link_meta'] ?? null;
        $this->container['link_url'] = $data['link_url'] ?? null;
        $this->container['link_expiry_time'] = $data['link_expiry_time'] ?? null;
        $this->container['link_notes'] = $data['link_notes'] ?? null;
        $this->container['link_auto_reminders'] = $data['link_auto_reminders'] ?? null;
        $this->container['link_notify'] = $data['link_notify'] ?? null;
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
     * Gets cf_link_id
     *
     * @return int|null
     */
    public function getCfLinkId()
    {
        return $this->container['cf_link_id'];
    }

    /**
     * Sets cf_link_id
     *
     * @param int|null $cf_link_id cf_link_id
     *
     * @return self
     */
    public function setCfLinkId($cf_link_id)
    {
        $this->container['cf_link_id'] = $cf_link_id;

        return $this;
    }

    /**
     * Gets link_id
     *
     * @return string|null
     */
    public function getLinkId()
    {
        return $this->container['link_id'];
    }

    /**
     * Sets link_id
     *
     * @param string|null $link_id link_id
     *
     * @return self
     */
    public function setLinkId($link_id)
    {
        $this->container['link_id'] = $link_id;

        return $this;
    }

    /**
     * Gets link_status
     *
     * @return string|null
     */
    public function getLinkStatus()
    {
        return $this->container['link_status'];
    }

    /**
     * Sets link_status
     *
     * @param string|null $link_status link_status
     *
     * @return self
     */
    public function setLinkStatus($link_status)
    {
        $this->container['link_status'] = $link_status;

        return $this;
    }

    /**
     * Gets link_currency
     *
     * @return string|null
     */
    public function getLinkCurrency()
    {
        return $this->container['link_currency'];
    }

    /**
     * Sets link_currency
     *
     * @param string|null $link_currency link_currency
     *
     * @return self
     */
    public function setLinkCurrency($link_currency)
    {
        $this->container['link_currency'] = $link_currency;

        return $this;
    }

    /**
     * Gets link_amount
     *
     * @return float|null
     */
    public function getLinkAmount()
    {
        return $this->container['link_amount'];
    }

    /**
     * Sets link_amount
     *
     * @param float|null $link_amount link_amount
     *
     * @return self
     */
    public function setLinkAmount($link_amount)
    {
        $this->container['link_amount'] = $link_amount;

        return $this;
    }

    /**
     * Gets link_amount_paid
     *
     * @return float|null
     */
    public function getLinkAmountPaid()
    {
        return $this->container['link_amount_paid'];
    }

    /**
     * Sets link_amount_paid
     *
     * @param float|null $link_amount_paid link_amount_paid
     *
     * @return self
     */
    public function setLinkAmountPaid($link_amount_paid)
    {
        $this->container['link_amount_paid'] = $link_amount_paid;

        return $this;
    }

    /**
     * Gets link_partial_payments
     *
     * @return bool|null
     */
    public function getLinkPartialPayments()
    {
        return $this->container['link_partial_payments'];
    }

    /**
     * Sets link_partial_payments
     *
     * @param bool|null $link_partial_payments link_partial_payments
     *
     * @return self
     */
    public function setLinkPartialPayments($link_partial_payments)
    {
        $this->container['link_partial_payments'] = $link_partial_payments;

        return $this;
    }

    /**
     * Gets link_minimum_partial_amount
     *
     * @return float|null
     */
    public function getLinkMinimumPartialAmount()
    {
        return $this->container['link_minimum_partial_amount'];
    }

    /**
     * Sets link_minimum_partial_amount
     *
     * @param float|null $link_minimum_partial_amount link_minimum_partial_amount
     *
     * @return self
     */
    public function setLinkMinimumPartialAmount($link_minimum_partial_amount)
    {
        $this->container['link_minimum_partial_amount'] = $link_minimum_partial_amount;

        return $this;
    }

    /**
     * Gets link_purpose
     *
     * @return string|null
     */
    public function getLinkPurpose()
    {
        return $this->container['link_purpose'];
    }

    /**
     * Sets link_purpose
     *
     * @param string|null $link_purpose link_purpose
     *
     * @return self
     */
    public function setLinkPurpose($link_purpose)
    {
        $this->container['link_purpose'] = $link_purpose;

        return $this;
    }

    /**
     * Gets link_created_at
     *
     * @return string|null
     */
    public function getLinkCreatedAt()
    {
        return $this->container['link_created_at'];
    }

    /**
     * Sets link_created_at
     *
     * @param string|null $link_created_at link_created_at
     *
     * @return self
     */
    public function setLinkCreatedAt($link_created_at)
    {
        $this->container['link_created_at'] = $link_created_at;

        return $this;
    }

    /**
     * Gets customer_details
     *
     * @return \OpenAPI\Client\Model\CFLinkCustomerDetailsEntity|null
     */
    public function getCustomerDetails()
    {
        return $this->container['customer_details'];
    }

    /**
     * Sets customer_details
     *
     * @param \OpenAPI\Client\Model\CFLinkCustomerDetailsEntity|null $customer_details customer_details
     *
     * @return self
     */
    public function setCustomerDetails($customer_details)
    {
        $this->container['customer_details'] = $customer_details;

        return $this;
    }

    /**
     * Gets link_meta
     *
     * @return \OpenAPI\Client\Model\CFLinkMetaEntity|null
     */
    public function getLinkMeta()
    {
        return $this->container['link_meta'];
    }

    /**
     * Sets link_meta
     *
     * @param \OpenAPI\Client\Model\CFLinkMetaEntity|null $link_meta link_meta
     *
     * @return self
     */
    public function setLinkMeta($link_meta)
    {
        $this->container['link_meta'] = $link_meta;

        return $this;
    }

    /**
     * Gets link_url
     *
     * @return string|null
     */
    public function getLinkUrl()
    {
        return $this->container['link_url'];
    }

    /**
     * Sets link_url
     *
     * @param string|null $link_url link_url
     *
     * @return self
     */
    public function setLinkUrl($link_url)
    {
        $this->container['link_url'] = $link_url;

        return $this;
    }

    /**
     * Gets link_expiry_time
     *
     * @return string|null
     */
    public function getLinkExpiryTime()
    {
        return $this->container['link_expiry_time'];
    }

    /**
     * Sets link_expiry_time
     *
     * @param string|null $link_expiry_time link_expiry_time
     *
     * @return self
     */
    public function setLinkExpiryTime($link_expiry_time)
    {
        $this->container['link_expiry_time'] = $link_expiry_time;

        return $this;
    }

    /**
     * Gets link_notes
     *
     * @return array<string,string>|null
     */
    public function getLinkNotes()
    {
        return $this->container['link_notes'];
    }

    /**
     * Sets link_notes
     *
     * @param array<string,string>|null $link_notes Key-value pair that can be used to store additional information about the entity. Maximum 5 key-value pairs
     *
     * @return self
     */
    public function setLinkNotes($link_notes)
    {
        $this->container['link_notes'] = $link_notes;

        return $this;
    }

    /**
     * Gets link_auto_reminders
     *
     * @return bool|null
     */
    public function getLinkAutoReminders()
    {
        return $this->container['link_auto_reminders'];
    }

    /**
     * Sets link_auto_reminders
     *
     * @param bool|null $link_auto_reminders link_auto_reminders
     *
     * @return self
     */
    public function setLinkAutoReminders($link_auto_reminders)
    {
        $this->container['link_auto_reminders'] = $link_auto_reminders;

        return $this;
    }

    /**
     * Gets link_notify
     *
     * @return \OpenAPI\Client\Model\CFLinkNotifyEntity|null
     */
    public function getLinkNotify()
    {
        return $this->container['link_notify'];
    }

    /**
     * Sets link_notify
     *
     * @param \OpenAPI\Client\Model\CFLinkNotifyEntity|null $link_notify link_notify
     *
     * @return self
     */
    public function setLinkNotify($link_notify)
    {
        $this->container['link_notify'] = $link_notify;

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


