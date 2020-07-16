<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Commerce\Catalog\Admin\Attributedefinition\Producttypes;

use Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\Producttypes\ProductTypeVariationClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\ApiContext;


/**
* Use the variations resource to preview possible product variations for a specific product type based on the option attributes defined for the product type, such as size or color.
*/
class ProductTypeVariationResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Generates the variations possible for a product associated with the product type based on the option values supplied in the request.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $productCode 
	* @param int $productTypeId Identifier of the product type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @param array|ProductOption $productOptionsIn Properties of the product option to create such as attribute detail, fully qualified name, and list of product option values.
	* @return ProductVariationPagedCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function generateProductVariations($productOptionsIn, $productTypeId, $productCode =  null, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = ProductTypeVariationClient::generateProductVariationsClient($productOptionsIn, $productTypeId, $productCode, $startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Generates the variations possible for a product associated with the product type based on the option values supplied in the request.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $productCode 
	* @param int $productTypeId Identifier of the product type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function generateProductVariationsAsync($productOptionsIn, $productTypeId, $productCode =  null, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = ProductTypeVariationClient::generateProductVariationsClient($productOptionsIn, $productTypeId, $productCode, $startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

