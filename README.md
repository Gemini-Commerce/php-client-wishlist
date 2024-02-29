# wishlist

API for managing wishlists


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/Gemini-Commerce/php-client-wishlist.git"
    }
  ],
  "require": {
    "Gemini-Commerce/php-client-wishlist": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/wishlist/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: Authorization
$config = GeminiCommerce\Wishlist\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Wishlist\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Wishlist\Api\WishlistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Wishlist\Model\WishlistAddItemToWishlistRequest(); // \GeminiCommerce\Wishlist\Model\WishlistAddItemToWishlistRequest

try {
    $result = $apiInstance->wishlistAddItemToWishlist($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishlistApi->wishlistAddItemToWishlist: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://wishlist.api.gogemini.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*WishlistApi* | [**wishlistAddItemToWishlist**](docs/Api/WishlistApi.md#wishlistadditemtowishlist) | **POST** /wishlist.Wishlist/AddItemToWishlist | 
*WishlistApi* | [**wishlistAreItemsInWishlists**](docs/Api/WishlistApi.md#wishlistareitemsinwishlists) | **POST** /wishlist.Wishlist/AreItemsInWishlists | 
*WishlistApi* | [**wishlistBulkCreateSharing**](docs/Api/WishlistApi.md#wishlistbulkcreatesharing) | **POST** /wishlist.Wishlist/BulkCreateSharing | Sharing endpoints
*WishlistApi* | [**wishlistBulkRemoveItemsFromWishlists**](docs/Api/WishlistApi.md#wishlistbulkremoveitemsfromwishlists) | **POST** /wishlist.Wishlist/BulkRemoveItemsFromWishlists | BulkRemoveItemsFromWishlists removes items from wishlists.
*WishlistApi* | [**wishlistBulkRevokeSharing**](docs/Api/WishlistApi.md#wishlistbulkrevokesharing) | **POST** /wishlist.Wishlist/BulkRevokeSharing | 
*WishlistApi* | [**wishlistCreateWishlist**](docs/Api/WishlistApi.md#wishlistcreatewishlist) | **POST** /wishlist.Wishlist/CreateWishlist | 
*WishlistApi* | [**wishlistDeleteWishlist**](docs/Api/WishlistApi.md#wishlistdeletewishlist) | **POST** /wishlist.Wishlist/DeleteWishlist | 
*WishlistApi* | [**wishlistGetItemFromWishlist**](docs/Api/WishlistApi.md#wishlistgetitemfromwishlist) | **POST** /wishlist.Wishlist/GetItemFromWishlist | 
*WishlistApi* | [**wishlistGetWishlistById**](docs/Api/WishlistApi.md#wishlistgetwishlistbyid) | **POST** /wishlist.Wishlist/GetWishlistById | 
*WishlistApi* | [**wishlistGetWishlistBySharedCode**](docs/Api/WishlistApi.md#wishlistgetwishlistbysharedcode) | **POST** /wishlist.Wishlist/GetWishlistBySharedCode | 
*WishlistApi* | [**wishlistListWishlistItems**](docs/Api/WishlistApi.md#wishlistlistwishlistitems) | **POST** /wishlist.Wishlist/ListWishlistItems | 
*WishlistApi* | [**wishlistListWishlists**](docs/Api/WishlistApi.md#wishlistlistwishlists) | **POST** /wishlist.Wishlist/ListWishlists | 
*WishlistApi* | [**wishlistMergeWishlists**](docs/Api/WishlistApi.md#wishlistmergewishlists) | **POST** /wishlist.Wishlist/MergeWishlists | 
*WishlistApi* | [**wishlistRemoveItemFromWishlist**](docs/Api/WishlistApi.md#wishlistremoveitemfromwishlist) | **POST** /wishlist.Wishlist/RemoveItemFromWishlist | 
*WishlistApi* | [**wishlistUpdateItemInWishlist**](docs/Api/WishlistApi.md#wishlistupdateiteminwishlist) | **POST** /wishlist.Wishlist/UpdateItemInWishlist | 
*WishlistApi* | [**wishlistUpdateWishlist**](docs/Api/WishlistApi.md#wishlistupdatewishlist) | **POST** /wishlist.Wishlist/UpdateWishlist | 

## Models

- [ListWishlistsRequestFilter](docs/Model/ListWishlistsRequestFilter.md)
- [ProtobufAny](docs/Model/ProtobufAny.md)
- [RpcStatus](docs/Model/RpcStatus.md)
- [WishlistAddItemToWishlistRequest](docs/Model/WishlistAddItemToWishlistRequest.md)
- [WishlistAreItemsInWishlistsRequest](docs/Model/WishlistAreItemsInWishlistsRequest.md)
- [WishlistAreItemsInWishlistsResponse](docs/Model/WishlistAreItemsInWishlistsResponse.md)
- [WishlistAreItemsInWishlistsResponsePayload](docs/Model/WishlistAreItemsInWishlistsResponsePayload.md)
- [WishlistBulkCreateSharingRequest](docs/Model/WishlistBulkCreateSharingRequest.md)
- [WishlistBulkCreateSharingResponse](docs/Model/WishlistBulkCreateSharingResponse.md)
- [WishlistBulkRemoveItemsFromWishlistsRequest](docs/Model/WishlistBulkRemoveItemsFromWishlistsRequest.md)
- [WishlistBulkRevokeSharingRequest](docs/Model/WishlistBulkRevokeSharingRequest.md)
- [WishlistCreateWishlistRequest](docs/Model/WishlistCreateWishlistRequest.md)
- [WishlistDeleteWishlistRequest](docs/Model/WishlistDeleteWishlistRequest.md)
- [WishlistGetItemFromWishlistRequest](docs/Model/WishlistGetItemFromWishlistRequest.md)
- [WishlistGetWishlistByIdRequest](docs/Model/WishlistGetWishlistByIdRequest.md)
- [WishlistGetWishlistBySharedCodeRequest](docs/Model/WishlistGetWishlistBySharedCodeRequest.md)
- [WishlistListWishlistItemsRequest](docs/Model/WishlistListWishlistItemsRequest.md)
- [WishlistListWishlistItemsResponse](docs/Model/WishlistListWishlistItemsResponse.md)
- [WishlistListWishlistsRequest](docs/Model/WishlistListWishlistsRequest.md)
- [WishlistListWishlistsResponse](docs/Model/WishlistListWishlistsResponse.md)
- [WishlistLocalizedText](docs/Model/WishlistLocalizedText.md)
- [WishlistMergeWishlistsRequest](docs/Model/WishlistMergeWishlistsRequest.md)
- [WishlistPermission](docs/Model/WishlistPermission.md)
- [WishlistPrivacy](docs/Model/WishlistPrivacy.md)
- [WishlistRemoveItemFromWishlistRequest](docs/Model/WishlistRemoveItemFromWishlistRequest.md)
- [WishlistSharingRequest](docs/Model/WishlistSharingRequest.md)
- [WishlistSharingResponse](docs/Model/WishlistSharingResponse.md)
- [WishlistUpdateItemInWishlistRequest](docs/Model/WishlistUpdateItemInWishlistRequest.md)
- [WishlistUpdateItemInWishlistRequestPayload](docs/Model/WishlistUpdateItemInWishlistRequestPayload.md)
- [WishlistUpdateWishlistRequest](docs/Model/WishlistUpdateWishlistRequest.md)
- [WishlistUpdateWishlistRequestPayload](docs/Model/WishlistUpdateWishlistRequestPayload.md)
- [WishlistWishlistItemResponse](docs/Model/WishlistWishlistItemResponse.md)
- [WishlistWishlistResponse](docs/Model/WishlistWishlistResponse.md)

## Authorization

Authentication schemes defined for the API:
### Authorization

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


### standardAuthorization

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: ``
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

info@gemini-commerce.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1`
    - Package version: `1.2.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
