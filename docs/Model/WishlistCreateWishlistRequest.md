# # WishlistCreateWishlistRequest


## Properties


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tenant_id**| **string** |   |
**privacy**| [**\GeminiCommerce\Wishlist\Model\WishlistPrivacy**](WishlistPrivacy.md) |  for more information please, see Model/WishlistPrivacy.php  |
**label**| [**\GeminiCommerce\Wishlist\Model\WishlistLocalizedText**](WishlistLocalizedText.md) |   | [optional]
**description**| [**\GeminiCommerce\Wishlist\Model\WishlistLocalizedText**](WishlistLocalizedText.md) |   | [optional]
**customer_grn**| **string** | If the customer GRN is set on JWT, it will be used as default. Otherwise, it will be used the customer_grn field.  | [optional]
**is_default**| **bool** |   | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)