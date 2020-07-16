<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Catalog\Admin;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Commerce\Catalog\Admin\ProductUrl;

use Drupal\kibo_sdk_proxy\Mozu\Api\Headers;

/**
* Use the Product Administration resource to create new product definitions in the master catalog and determine which catalogs will feature products. You can also assign attribute values for defined products, manage product-level location inventory, and configure the variations of a product.
*/
class ProductClient {

	/**
	* Retrieves a list of products according to any specified facets, filter criteria, and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param bool $noCount If true, the operation does not return the TotalCount number of results.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $q A list of order search terms (not phrases) to use in the query when searching across order number and the name or email of the billing contact. When entering, separate multiple search terms with a space character.
	* @param int $qLimit The maximum number of search results to return in the response. You can limit any range between 1-100.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getProductsClient($dataViewMode, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $q =  null, $qLimit =  null, $noCount =  null, $responseFields =  null)
	{
		$url = ProductUrl::getProductsUrl($filter, $noCount, $pageSize, $q, $qLimit, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Retrieves a product that is associated with one or more specific catalogs.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @return MozuClient
	*/
	public static function getProductInCatalogsClient($dataViewMode, $productCode)
	{
		$url = ProductUrl::getProductInCatalogsUrl($productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of a product associated with a specific catalog.
	*
	* @param int $catalogId The unique identifier of the catalog of products used by a site.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getProductInCatalogClient($dataViewMode, $productCode, $catalogId, $responseFields =  null)
	{
		$url = ProductUrl::getProductInCatalogUrl($catalogId, $productCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of a product definition.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getProductClient($dataViewMode, $productCode, $responseFields =  null)
	{
		$url = ProductUrl::getProductUrl($productCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Creates a new product definition in the specified master catalog.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Product $product The properties of a product, referenced and used by carts, orders, wish lists, and returns.
	* @return MozuClient
	*/
	public static function addProductClient($dataViewMode, $product, $responseFields =  null)
	{
		$url = ProductUrl::addProductUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($product)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Associates a new product defined in the master catalog with a specific catalog.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param ProductInCatalogInfo $productInCatalogInfoIn Properties of a product associated with a specific catalog.
	* @return MozuClient
	*/
	public static function addProductInCatalogClient($dataViewMode, $productInCatalogInfoIn, $productCode, $responseFields =  null)
	{
		$url = ProductUrl::addProductInCatalogUrl($productCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productInCatalogInfoIn)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Performs an update to a product code by renaming or replacing the current product code with a new one.
	*
	* @param array|ProductCodeRename $productCodeRenames Properties for a product code current and changed content.
	*/
	public static function renameProductCodesClient($productCodeRenames)
	{
		$url = ProductUrl::renameProductCodesUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productCodeRenames);
		return $mozuClient;

	}
	
	/**
	* Updates the properties of a product specific to each catalog associated with the product.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param array|ProductInCatalogInfo $productInCatalogsIn Properties of a product associated with a specific catalog.
	* @return MozuClient
	*/
	public static function updateProductInCatalogsClient($dataViewMode, $productInCatalogsIn, $productCode)
	{
		$url = ProductUrl::updateProductInCatalogsUrl($productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productInCatalogsIn)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Updates one or more properties of a product associated with a specific catalog.
	*
	* @param int $catalogId The unique identifier of the catalog of products used by a site.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param ProductInCatalogInfo $productInCatalogInfoIn Properties of a product associated with a specific catalog.
	* @return MozuClient
	*/
	public static function updateProductInCatalogClient($dataViewMode, $productInCatalogInfoIn, $productCode, $catalogId, $responseFields =  null)
	{
		$url = ProductUrl::updateProductInCatalogUrl($catalogId, $productCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productInCatalogInfoIn)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Updates one or more properties of a product definition in a master catalog.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Product $product The properties of a product, referenced and used by carts, orders, wish lists, and returns.
	* @return MozuClient
	*/
	public static function updateProductClient($dataViewMode, $product, $productCode, $responseFields =  null)
	{
		$url = ProductUrl::updateProductUrl($productCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($product)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Deletes the specified product from a master catalog.
	*
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	*/
	public static function deleteProductClient($dataViewMode, $productCode)
	{
		$url = ProductUrl::deleteProductUrl($productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Removes the product association defined for a specific catalog.
	*
	* @param int $catalogId The unique identifier of the catalog of products used by a site.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	*/
	public static function deleteProductInCatalogClient($dataViewMode, $productCode, $catalogId)
	{
		$url = ProductUrl::deleteProductInCatalogUrl($catalogId, $productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	
}

?>

