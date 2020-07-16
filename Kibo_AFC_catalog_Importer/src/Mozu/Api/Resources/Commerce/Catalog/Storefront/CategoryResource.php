<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Resources\Commerce\Catalog\Storefront;

use Drupal\acf_kibo\Mozu\Api\Clients\Commerce\Catalog\Storefront\CategoryClient;
use Drupal\acf_kibo\Mozu\Api\ApiContext;

use Drupal\acf_kibo\Mozu\Api\Headers;

/**
* Use the Storefront Categories resource to view the product category hierarchy as it appears to shoppers who are browsing the storefront. The hierarchy can be returned as a flat list or as a category tree.
*/
class CategoryResource {

		private $apiContext;
		private $dataViewMode;
		public function __construct(ApiContext $apiContext, $dataViewMode) 
	{
		$this->apiContext = $apiContext;
		$this->dataViewMode = $dataViewMode;
	}
	



	/**
	* Retrieves a list of categories according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return CategoryPagedCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getCategories($filter =  null, $startIndex =  null, $pageSize =  null, $sortBy =  null, $responseFields =  null)
	{
		$mozuClient = CategoryClient::getCategoriesClient($this->dataViewMode, $filter, $startIndex, $pageSize, $sortBy, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of categories according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getCategoriesAsync($filter =  null, $startIndex =  null, $pageSize =  null, $sortBy =  null, $responseFields =  null)
	{
		$mozuClient = CategoryClient::getCategoriesClient($this->dataViewMode, $filter, $startIndex, $pageSize, $sortBy, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the details of a single category.
	*
	* @param bool $allowInactive If true, allow inactive categories to be retrieved in the category list response. If false, the categories retrieved will not include ones marked inactive.
	* @param int $categoryId Unique identifier for the storefront container used to organize products.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Category 
	* @deprecated deprecated since version 1.17
	*/
	public function getCategory($categoryId, $allowInactive =  null, $responseFields =  null)
	{
		$mozuClient = CategoryClient::getCategoryClient($this->dataViewMode, $categoryId, $allowInactive, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of a single category.
	*
	* @param bool $allowInactive If true, allow inactive categories to be retrieved in the category list response. If false, the categories retrieved will not include ones marked inactive.
	* @param int $categoryId Unique identifier for the storefront container used to organize products.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getCategoryAsync($categoryId, $allowInactive =  null, $responseFields =  null)
	{
		$mozuClient = CategoryClient::getCategoryClient($this->dataViewMode, $categoryId, $allowInactive, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the list of product categories that appear on the storefront organized in a hierarchical format. Hidden categories do not appear in the list.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return CategoryCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getCategoryTree($responseFields =  null)
	{
		$mozuClient = CategoryClient::getCategoryTreeClient($this->dataViewMode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the list of product categories that appear on the storefront organized in a hierarchical format. Hidden categories do not appear in the list.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getCategoryTreeAsync($responseFields =  null)
	{
		$mozuClient = CategoryClient::getCategoryTreeClient($this->dataViewMode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

