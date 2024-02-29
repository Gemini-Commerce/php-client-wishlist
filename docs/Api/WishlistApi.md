# GeminiCommerce\Wishlist\WishlistApi

All URIs are relative to https://wishlist.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**wishlistAddItemToWishlist()**](WishlistApi.md#wishlistAddItemToWishlist) | **POST** /wishlist.Wishlist/AddItemToWishlist |  |
| [**wishlistAreItemsInWishlists()**](WishlistApi.md#wishlistAreItemsInWishlists) | **POST** /wishlist.Wishlist/AreItemsInWishlists |  |
| [**wishlistBulkCreateSharing()**](WishlistApi.md#wishlistBulkCreateSharing) | **POST** /wishlist.Wishlist/BulkCreateSharing | Sharing endpoints |
| [**wishlistBulkRemoveItemsFromWishlists()**](WishlistApi.md#wishlistBulkRemoveItemsFromWishlists) | **POST** /wishlist.Wishlist/BulkRemoveItemsFromWishlists | BulkRemoveItemsFromWishlists removes items from wishlists. |
| [**wishlistBulkRevokeSharing()**](WishlistApi.md#wishlistBulkRevokeSharing) | **POST** /wishlist.Wishlist/BulkRevokeSharing |  |
| [**wishlistCreateWishlist()**](WishlistApi.md#wishlistCreateWishlist) | **POST** /wishlist.Wishlist/CreateWishlist |  |
| [**wishlistDeleteWishlist()**](WishlistApi.md#wishlistDeleteWishlist) | **POST** /wishlist.Wishlist/DeleteWishlist |  |
| [**wishlistGetItemFromWishlist()**](WishlistApi.md#wishlistGetItemFromWishlist) | **POST** /wishlist.Wishlist/GetItemFromWishlist |  |
| [**wishlistGetWishlistById()**](WishlistApi.md#wishlistGetWishlistById) | **POST** /wishlist.Wishlist/GetWishlistById |  |
| [**wishlistGetWishlistBySharedCode()**](WishlistApi.md#wishlistGetWishlistBySharedCode) | **POST** /wishlist.Wishlist/GetWishlistBySharedCode |  |
| [**wishlistListWishlistItems()**](WishlistApi.md#wishlistListWishlistItems) | **POST** /wishlist.Wishlist/ListWishlistItems |  |
| [**wishlistListWishlists()**](WishlistApi.md#wishlistListWishlists) | **POST** /wishlist.Wishlist/ListWishlists |  |
| [**wishlistMergeWishlists()**](WishlistApi.md#wishlistMergeWishlists) | **POST** /wishlist.Wishlist/MergeWishlists |  |
| [**wishlistRemoveItemFromWishlist()**](WishlistApi.md#wishlistRemoveItemFromWishlist) | **POST** /wishlist.Wishlist/RemoveItemFromWishlist |  |
| [**wishlistUpdateItemInWishlist()**](WishlistApi.md#wishlistUpdateItemInWishlist) | **POST** /wishlist.Wishlist/UpdateItemInWishlist |  |
| [**wishlistUpdateWishlist()**](WishlistApi.md#wishlistUpdateWishlist) | **POST** /wishlist.Wishlist/UpdateWishlist |  |


## `wishlistAddItemToWishlist()`

```php
wishlistAddItemToWishlist($body): \GeminiCommerce\Wishlist\Model\WishlistWishlistItemResponse
```



### Example

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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Wishlist\Model\WishlistAddItemToWishlistRequest**](../Model/WishlistAddItemToWishlistRequest.md)|  | |

### Return type

[**\GeminiCommerce\Wishlist\Model\WishlistWishlistItemResponse**](../Model/WishlistWishlistItemResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wishlistAreItemsInWishlists()`

```php
wishlistAreItemsInWishlists($body): \GeminiCommerce\Wishlist\Model\WishlistAreItemsInWishlistsResponse
```



### Example

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
$body = new \GeminiCommerce\Wishlist\Model\WishlistAreItemsInWishlistsRequest(); // \GeminiCommerce\Wishlist\Model\WishlistAreItemsInWishlistsRequest

try {
    $result = $apiInstance->wishlistAreItemsInWishlists($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishlistApi->wishlistAreItemsInWishlists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Wishlist\Model\WishlistAreItemsInWishlistsRequest**](../Model/WishlistAreItemsInWishlistsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Wishlist\Model\WishlistAreItemsInWishlistsResponse**](../Model/WishlistAreItemsInWishlistsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wishlistBulkCreateSharing()`

```php
wishlistBulkCreateSharing($body): \GeminiCommerce\Wishlist\Model\WishlistBulkCreateSharingResponse
```

Sharing endpoints

### Example

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
$body = new \GeminiCommerce\Wishlist\Model\WishlistBulkCreateSharingRequest(); // \GeminiCommerce\Wishlist\Model\WishlistBulkCreateSharingRequest

try {
    $result = $apiInstance->wishlistBulkCreateSharing($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishlistApi->wishlistBulkCreateSharing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Wishlist\Model\WishlistBulkCreateSharingRequest**](../Model/WishlistBulkCreateSharingRequest.md)|  | |

### Return type

[**\GeminiCommerce\Wishlist\Model\WishlistBulkCreateSharingResponse**](../Model/WishlistBulkCreateSharingResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wishlistBulkRemoveItemsFromWishlists()`

```php
wishlistBulkRemoveItemsFromWishlists($body): object
```

BulkRemoveItemsFromWishlists removes items from wishlists.

### Example

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
$body = new \GeminiCommerce\Wishlist\Model\WishlistBulkRemoveItemsFromWishlistsRequest(); // \GeminiCommerce\Wishlist\Model\WishlistBulkRemoveItemsFromWishlistsRequest

try {
    $result = $apiInstance->wishlistBulkRemoveItemsFromWishlists($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishlistApi->wishlistBulkRemoveItemsFromWishlists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Wishlist\Model\WishlistBulkRemoveItemsFromWishlistsRequest**](../Model/WishlistBulkRemoveItemsFromWishlistsRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wishlistBulkRevokeSharing()`

```php
wishlistBulkRevokeSharing($body): object
```



### Example

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
$body = new \GeminiCommerce\Wishlist\Model\WishlistBulkRevokeSharingRequest(); // \GeminiCommerce\Wishlist\Model\WishlistBulkRevokeSharingRequest

try {
    $result = $apiInstance->wishlistBulkRevokeSharing($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishlistApi->wishlistBulkRevokeSharing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Wishlist\Model\WishlistBulkRevokeSharingRequest**](../Model/WishlistBulkRevokeSharingRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wishlistCreateWishlist()`

```php
wishlistCreateWishlist($body): \GeminiCommerce\Wishlist\Model\WishlistWishlistResponse
```



### Example

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
$body = new \GeminiCommerce\Wishlist\Model\WishlistCreateWishlistRequest(); // \GeminiCommerce\Wishlist\Model\WishlistCreateWishlistRequest

try {
    $result = $apiInstance->wishlistCreateWishlist($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishlistApi->wishlistCreateWishlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Wishlist\Model\WishlistCreateWishlistRequest**](../Model/WishlistCreateWishlistRequest.md)|  | |

### Return type

[**\GeminiCommerce\Wishlist\Model\WishlistWishlistResponse**](../Model/WishlistWishlistResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wishlistDeleteWishlist()`

```php
wishlistDeleteWishlist($body): object
```



### Example

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
$body = new \GeminiCommerce\Wishlist\Model\WishlistDeleteWishlistRequest(); // \GeminiCommerce\Wishlist\Model\WishlistDeleteWishlistRequest

try {
    $result = $apiInstance->wishlistDeleteWishlist($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishlistApi->wishlistDeleteWishlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Wishlist\Model\WishlistDeleteWishlistRequest**](../Model/WishlistDeleteWishlistRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wishlistGetItemFromWishlist()`

```php
wishlistGetItemFromWishlist($body): \GeminiCommerce\Wishlist\Model\WishlistWishlistItemResponse
```



### Example

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
$body = new \GeminiCommerce\Wishlist\Model\WishlistGetItemFromWishlistRequest(); // \GeminiCommerce\Wishlist\Model\WishlistGetItemFromWishlistRequest

try {
    $result = $apiInstance->wishlistGetItemFromWishlist($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishlistApi->wishlistGetItemFromWishlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Wishlist\Model\WishlistGetItemFromWishlistRequest**](../Model/WishlistGetItemFromWishlistRequest.md)|  | |

### Return type

[**\GeminiCommerce\Wishlist\Model\WishlistWishlistItemResponse**](../Model/WishlistWishlistItemResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wishlistGetWishlistById()`

```php
wishlistGetWishlistById($body): \GeminiCommerce\Wishlist\Model\WishlistWishlistResponse
```



### Example

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
$body = new \GeminiCommerce\Wishlist\Model\WishlistGetWishlistByIdRequest(); // \GeminiCommerce\Wishlist\Model\WishlistGetWishlistByIdRequest

try {
    $result = $apiInstance->wishlistGetWishlistById($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishlistApi->wishlistGetWishlistById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Wishlist\Model\WishlistGetWishlistByIdRequest**](../Model/WishlistGetWishlistByIdRequest.md)|  | |

### Return type

[**\GeminiCommerce\Wishlist\Model\WishlistWishlistResponse**](../Model/WishlistWishlistResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wishlistGetWishlistBySharedCode()`

```php
wishlistGetWishlistBySharedCode($body): \GeminiCommerce\Wishlist\Model\WishlistWishlistResponse
```



### Example

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
$body = new \GeminiCommerce\Wishlist\Model\WishlistGetWishlistBySharedCodeRequest(); // \GeminiCommerce\Wishlist\Model\WishlistGetWishlistBySharedCodeRequest

try {
    $result = $apiInstance->wishlistGetWishlistBySharedCode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishlistApi->wishlistGetWishlistBySharedCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Wishlist\Model\WishlistGetWishlistBySharedCodeRequest**](../Model/WishlistGetWishlistBySharedCodeRequest.md)|  | |

### Return type

[**\GeminiCommerce\Wishlist\Model\WishlistWishlistResponse**](../Model/WishlistWishlistResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wishlistListWishlistItems()`

```php
wishlistListWishlistItems($body): \GeminiCommerce\Wishlist\Model\WishlistListWishlistItemsResponse
```



### Example

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
$body = new \GeminiCommerce\Wishlist\Model\WishlistListWishlistItemsRequest(); // \GeminiCommerce\Wishlist\Model\WishlistListWishlistItemsRequest

try {
    $result = $apiInstance->wishlistListWishlistItems($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishlistApi->wishlistListWishlistItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Wishlist\Model\WishlistListWishlistItemsRequest**](../Model/WishlistListWishlistItemsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Wishlist\Model\WishlistListWishlistItemsResponse**](../Model/WishlistListWishlistItemsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wishlistListWishlists()`

```php
wishlistListWishlists($body): \GeminiCommerce\Wishlist\Model\WishlistListWishlistsResponse
```



### Example

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
$body = new \GeminiCommerce\Wishlist\Model\WishlistListWishlistsRequest(); // \GeminiCommerce\Wishlist\Model\WishlistListWishlistsRequest

try {
    $result = $apiInstance->wishlistListWishlists($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishlistApi->wishlistListWishlists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Wishlist\Model\WishlistListWishlistsRequest**](../Model/WishlistListWishlistsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Wishlist\Model\WishlistListWishlistsResponse**](../Model/WishlistListWishlistsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wishlistMergeWishlists()`

```php
wishlistMergeWishlists($body): \GeminiCommerce\Wishlist\Model\WishlistWishlistResponse
```



### Example

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
$body = new \GeminiCommerce\Wishlist\Model\WishlistMergeWishlistsRequest(); // \GeminiCommerce\Wishlist\Model\WishlistMergeWishlistsRequest

try {
    $result = $apiInstance->wishlistMergeWishlists($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishlistApi->wishlistMergeWishlists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Wishlist\Model\WishlistMergeWishlistsRequest**](../Model/WishlistMergeWishlistsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Wishlist\Model\WishlistWishlistResponse**](../Model/WishlistWishlistResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wishlistRemoveItemFromWishlist()`

```php
wishlistRemoveItemFromWishlist($body): object
```



### Example

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
$body = new \GeminiCommerce\Wishlist\Model\WishlistRemoveItemFromWishlistRequest(); // \GeminiCommerce\Wishlist\Model\WishlistRemoveItemFromWishlistRequest

try {
    $result = $apiInstance->wishlistRemoveItemFromWishlist($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishlistApi->wishlistRemoveItemFromWishlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Wishlist\Model\WishlistRemoveItemFromWishlistRequest**](../Model/WishlistRemoveItemFromWishlistRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wishlistUpdateItemInWishlist()`

```php
wishlistUpdateItemInWishlist($body): \GeminiCommerce\Wishlist\Model\WishlistWishlistItemResponse
```



### Example

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
$body = new \GeminiCommerce\Wishlist\Model\WishlistUpdateItemInWishlistRequest(); // \GeminiCommerce\Wishlist\Model\WishlistUpdateItemInWishlistRequest

try {
    $result = $apiInstance->wishlistUpdateItemInWishlist($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishlistApi->wishlistUpdateItemInWishlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Wishlist\Model\WishlistUpdateItemInWishlistRequest**](../Model/WishlistUpdateItemInWishlistRequest.md)|  | |

### Return type

[**\GeminiCommerce\Wishlist\Model\WishlistWishlistItemResponse**](../Model/WishlistWishlistItemResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wishlistUpdateWishlist()`

```php
wishlistUpdateWishlist($body): \GeminiCommerce\Wishlist\Model\WishlistWishlistResponse
```



### Example

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
$body = new \GeminiCommerce\Wishlist\Model\WishlistUpdateWishlistRequest(); // \GeminiCommerce\Wishlist\Model\WishlistUpdateWishlistRequest

try {
    $result = $apiInstance->wishlistUpdateWishlist($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishlistApi->wishlistUpdateWishlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Wishlist\Model\WishlistUpdateWishlistRequest**](../Model/WishlistUpdateWishlistRequest.md)|  | |

### Return type

[**\GeminiCommerce\Wishlist\Model\WishlistWishlistResponse**](../Model/WishlistWishlistResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
