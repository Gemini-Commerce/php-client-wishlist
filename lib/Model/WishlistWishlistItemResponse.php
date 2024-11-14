<?php
/**
 * WishlistWishlistItemResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Wishlist Service
 *
 * API for managing wishlists
 *
 * The version of the OpenAPI document: v1
 * Contact: info@gemini-commerce.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
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
 * WishlistWishlistItemResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WishlistWishlistItemResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static $withAdditionalProperties = false;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'wishlistWishlistItemResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'grn' => 'string',
        'wishlist_id' => 'string',
        'item_grn' => 'string',
        'preferred_quantity' => 'string',
        'description' => '\OpenAPI\Client\Model\WishlistLocalizedText',
        'added_by_customer_grn' => 'string',
        'added_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'grn' => null,
        'wishlist_id' => null,
        'item_grn' => null,
        'preferred_quantity' => 'uint64',
        'description' => null,
        'added_by_customer_grn' => null,
        'added_at' => 'date-time',
        'updated_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'grn' => false,
        'wishlist_id' => false,
        'item_grn' => false,
        'preferred_quantity' => false,
        'description' => false,
        'added_by_customer_grn' => false,
        'added_at' => false,
        'updated_at' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'grn' => 'grn',
        'wishlist_id' => 'wishlistId',
        'item_grn' => 'itemGrn',
        'preferred_quantity' => 'preferredQuantity',
        'description' => 'description',
        'added_by_customer_grn' => 'addedByCustomerGrn',
        'added_at' => 'addedAt',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'grn' => 'setGrn',
        'wishlist_id' => 'setWishlistId',
        'item_grn' => 'setItemGrn',
        'preferred_quantity' => 'setPreferredQuantity',
        'description' => 'setDescription',
        'added_by_customer_grn' => 'setAddedByCustomerGrn',
        'added_at' => 'setAddedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'grn' => 'getGrn',
        'wishlist_id' => 'getWishlistId',
        'item_grn' => 'getItemGrn',
        'preferred_quantity' => 'getPreferredQuantity',
        'description' => 'getDescription',
        'added_by_customer_grn' => 'getAddedByCustomerGrn',
        'added_at' => 'getAddedAt',
        'updated_at' => 'getUpdatedAt'
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
     * Associative array for storing additional properties
     *
     * @var mixed[]
     */
    protected $additionalProperties = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('grn', $data ?? [], null);
        $this->setIfExists('wishlist_id', $data ?? [], null);
        $this->setIfExists('item_grn', $data ?? [], null);
        $this->setIfExists('preferred_quantity', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('added_by_customer_grn', $data ?? [], null);
        $this->setIfExists('added_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets grn
     *
     * @return string|null
     */
    public function getGrn()
    {
        return $this->container['grn'];
    }

    /**
     * Sets grn
     *
     * @param string|null $grn grn
     *
     * @return self
     */
    public function setGrn($grn)
    {
        if (is_null($grn)) {
            throw new \InvalidArgumentException('non-nullable grn cannot be null');
        }
        $this->container['grn'] = $grn;

        return $this;
    }

    /**
     * Gets wishlist_id
     *
     * @return string|null
     */
    public function getWishlistId()
    {
        return $this->container['wishlist_id'];
    }

    /**
     * Sets wishlist_id
     *
     * @param string|null $wishlist_id wishlist_id
     *
     * @return self
     */
    public function setWishlistId($wishlist_id)
    {
        if (is_null($wishlist_id)) {
            throw new \InvalidArgumentException('non-nullable wishlist_id cannot be null');
        }
        $this->container['wishlist_id'] = $wishlist_id;

        return $this;
    }

    /**
     * Gets item_grn
     *
     * @return string|null
     */
    public function getItemGrn()
    {
        return $this->container['item_grn'];
    }

    /**
     * Sets item_grn
     *
     * @param string|null $item_grn item_grn
     *
     * @return self
     */
    public function setItemGrn($item_grn)
    {
        if (is_null($item_grn)) {
            throw new \InvalidArgumentException('non-nullable item_grn cannot be null');
        }
        $this->container['item_grn'] = $item_grn;

        return $this;
    }

    /**
     * Gets preferred_quantity
     *
     * @return string|null
     */
    public function getPreferredQuantity()
    {
        return $this->container['preferred_quantity'];
    }

    /**
     * Sets preferred_quantity
     *
     * @param string|null $preferred_quantity preferred_quantity
     *
     * @return self
     */
    public function setPreferredQuantity($preferred_quantity)
    {
        if (is_null($preferred_quantity)) {
            throw new \InvalidArgumentException('non-nullable preferred_quantity cannot be null');
        }
        $this->container['preferred_quantity'] = $preferred_quantity;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \OpenAPI\Client\Model\WishlistLocalizedText|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \OpenAPI\Client\Model\WishlistLocalizedText|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets added_by_customer_grn
     *
     * @return string|null
     */
    public function getAddedByCustomerGrn()
    {
        return $this->container['added_by_customer_grn'];
    }

    /**
     * Sets added_by_customer_grn
     *
     * @param string|null $added_by_customer_grn added_by_customer_grn
     *
     * @return self
     */
    public function setAddedByCustomerGrn($added_by_customer_grn)
    {
        if (is_null($added_by_customer_grn)) {
            throw new \InvalidArgumentException('non-nullable added_by_customer_grn cannot be null');
        }
        $this->container['added_by_customer_grn'] = $added_by_customer_grn;

        return $this;
    }

    /**
     * Gets added_at
     *
     * @return \DateTime|null
     */
    public function getAddedAt()
    {
        return $this->container['added_at'];
    }

    /**
     * Sets added_at
     *
     * @param \DateTime|null $added_at added_at
     *
     * @return self
     */
    public function setAddedAt($added_at)
    {
        if (is_null($added_at)) {
            throw new \InvalidArgumentException('non-nullable added_at cannot be null');
        }
        $this->container['added_at'] = $added_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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

    public static function withAdditionalProperties(): bool
    {
        return self::$withAdditionalProperties;
    }


    public function setAdditionalProperty($name, $value)
    {
        throw new \InvalidArgumentException(
            sprintf(
                "This model cannot have additional properties"
            )
        );
    }

    public function getAdditionalProperty($name)
    {
        return $this->additionalProperties[$name];
    }

    public function hasAdditionalProperty($name): bool
    {
        return array_key_exists($name, $this->additionalProperties);
    }

    public function getAdditionalProperties()
    {
        return $this->additionalProperties;
    }
}


