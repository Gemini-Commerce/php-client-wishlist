<?php
/**
 * WishlistPrivacy
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * WishlistPrivacy Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WishlistPrivacy
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'PRIVACY_UNKNOWN';

    public const _PUBLIC = 'PRIVACY_PUBLIC';

    public const _PRIVATE = 'PRIVACY_PRIVATE';

    public const SHARED = 'PRIVACY_SHARED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::_PUBLIC,
            self::_PRIVATE,
            self::SHARED
        ];
    }
}


