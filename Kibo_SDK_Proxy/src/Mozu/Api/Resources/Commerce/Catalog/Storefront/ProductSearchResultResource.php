<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Commerce\Catalog\Storefront;

use Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Catalog\Storefront\ProductSearchResultClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\ApiContext;


/**
* Use the Product Search resource to provide dynamic search results to shoppers as they browse and search for products on the web storefront, and to suggest possible search terms as the shopper enters text.
*/
class ProductSearchResultResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Random access paging computes a set of , which can each then be provided to the  operation in the  resource or the  operation in the  resource. You can provide the computed groups in any order to the operations, and can therefore parallelize calls to retrieve products more quickly. To generate the set of , call this () operation, in which you can optionally provide query and/or filter parameters to limit the products matched by the cursor. After executing this operation, pass one of the returned  to the  parameter of the  or  operations.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $query Properties for the product location inventory provided for queries to locate products by their location.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return ProductSearchRandomAccessCursor 
	* @deprecated deprecated since version 1.17
	*/
	public function getRandomAccessCursor($query =  null, $filter =  null, $pageSize =  null, $responseFields =  null)
	{
		$mozuClient = ProductSearchResultClient::getRandomAccessCursorClient($query, $filter, $pageSize, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Random access paging computes a set of , which can each then be provided to the  operation in the  resource or the  operation in the  resource. You can provide the computed groups in any order to the operations, and can therefore parallelize calls to retrieve products more quickly. To generate the set of , call this () operation, in which you can optionally provide query and/or filter parameters to limit the products matched by the cursor. After executing this operation, pass one of the returned  to the  parameter of the  or  operations.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $query Properties for the product location inventory provided for queries to locate products by their location.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getRandomAccessCursorAsync($query =  null, $filter =  null, $pageSize =  null, $responseFields =  null)
	{
		$mozuClient = ProductSearchResultClient::getRandomAccessCursorClient($query, $filter, $pageSize, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Searches the categories displayed on the web storefront for products or product options that the shopper types in a search query.
	*
	* @param string $cursorMark In your first deep paged request, set this parameter to . Then, in all subsequent requests, set this parameter to the subsequent values of  that's returned in each response to continue paging through the results. Continue this pattern until  is null, which signifies the end of the paged results.
	* @param bool $enableSearchTuningRules Enables search tuning rules on your site.
	* @param string $facet Individually list the facet fields you want to display in a web storefront product search.
	* @param string $facetFieldRangeQuery Display a range facet not specified in a template in a web storefront product search by listing the facet field and the range to display.
	* @param string $facetHierDepth If filtering using category facets in a hierarchy, the number of category hierarchy levels to return for the facet. This option is only available for category facets.
	* @param string $facetHierPrefix If filtering using category facets in a hierarchy, the parent categories you want to skip in the storefront product search. This parameter is only available for category facets.
	* @param string $facetHierValue If filtering using category facets in a hierarchy, the category in the hierarchy to begin faceting on. This parameter is only available for category facets.
	* @param string $facetPageSize The number of facet values to return for one or more facets.
	* @param string $facetPrefix Use this parameter to filter facet values that are returned by an associated search result by a prefix.For example, to filter on colors that start with b, such as blue, black, or brown you can specify the following:
	* @param string $facetSettings Settings reserved for future facet search functionality on a web storefront product search.
	* @param string $facetStartIndex When paging through multiple facets, the startIndex value for each facet.
	* @param string $facetTemplate The facet template to use on the storefront. A template displays all facets associated with the template on the web storefront product search. Currently, only category-level facet templates are available.
	* @param string $facetTemplateExclude A comma-separated list of the facets to exclude from the facetTemplate.
        
	* @param string $facetTemplateSubset Display a subset of the facets defined in the template specified in facetTemplate parameter.
	* @param string $facetValueFilter The facet values to apply to the filter.
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $query Properties for the product location inventory provided for queries to locate products by their location.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $responseOptions Options you can specify for the response. This parameter is null by default.You can primarily use this parameter to return volume price band information in product details, which you can then display on category pages and search results depanding on your theme configuration. To return volume price band information, set this parameter to .
	* @param string $searchSettings The settings to control product search and indexing behavior.
	* @param string $searchTuningRuleCode The unique identifier of the search tuning rule.
	* @param string $searchTuningRuleContext The category ID that the search tuning rule applies to.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return ProductSearchResult 
	* @deprecated deprecated since version 1.17
	*/
	public function search($query =  null, $filter =  null, $facetTemplate =  null, $facetTemplateSubset =  null, $facet =  null, $facetFieldRangeQuery =  null, $facetHierPrefix =  null, $facetHierValue =  null, $facetHierDepth =  null, $facetStartIndex =  null, $facetPageSize =  null, $facetSettings =  null, $facetValueFilter =  null, $sortBy =  null, $pageSize =  null, $startIndex =  null, $searchSettings =  null, $enableSearchTuningRules =  null, $searchTuningRuleContext =  null, $searchTuningRuleCode =  null, $facetTemplateExclude =  null, $facetPrefix =  null, $responseOptions =  null, $cursorMark =  null, $responseFields =  null)
	{
		$mozuClient = ProductSearchResultClient::searchClient($query, $filter, $facetTemplate, $facetTemplateSubset, $facet, $facetFieldRangeQuery, $facetHierPrefix, $facetHierValue, $facetHierDepth, $facetStartIndex, $facetPageSize, $facetSettings, $facetValueFilter, $sortBy, $pageSize, $startIndex, $searchSettings, $enableSearchTuningRules, $searchTuningRuleContext, $searchTuningRuleCode, $facetTemplateExclude, $facetPrefix, $responseOptions, $cursorMark, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Searches the categories displayed on the web storefront for products or product options that the shopper types in a search query.
	*
	* @param string $cursorMark In your first deep paged request, set this parameter to . Then, in all subsequent requests, set this parameter to the subsequent values of  that's returned in each response to continue paging through the results. Continue this pattern until  is null, which signifies the end of the paged results.
	* @param bool $enableSearchTuningRules Enables search tuning rules on your site.
	* @param string $facet Individually list the facet fields you want to display in a web storefront product search.
	* @param string $facetFieldRangeQuery Display a range facet not specified in a template in a web storefront product search by listing the facet field and the range to display.
	* @param string $facetHierDepth If filtering using category facets in a hierarchy, the number of category hierarchy levels to return for the facet. This option is only available for category facets.
	* @param string $facetHierPrefix If filtering using category facets in a hierarchy, the parent categories you want to skip in the storefront product search. This parameter is only available for category facets.
	* @param string $facetHierValue If filtering using category facets in a hierarchy, the category in the hierarchy to begin faceting on. This parameter is only available for category facets.
	* @param string $facetPageSize The number of facet values to return for one or more facets.
	* @param string $facetPrefix Use this parameter to filter facet values that are returned by an associated search result by a prefix.For example, to filter on colors that start with b, such as blue, black, or brown you can specify the following:
	* @param string $facetSettings Settings reserved for future facet search functionality on a web storefront product search.
	* @param string $facetStartIndex When paging through multiple facets, the startIndex value for each facet.
	* @param string $facetTemplate The facet template to use on the storefront. A template displays all facets associated with the template on the web storefront product search. Currently, only category-level facet templates are available.
	* @param string $facetTemplateExclude A comma-separated list of the facets to exclude from the facetTemplate.
        
	* @param string $facetTemplateSubset Display a subset of the facets defined in the template specified in facetTemplate parameter.
	* @param string $facetValueFilter The facet values to apply to the filter.
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $query Properties for the product location inventory provided for queries to locate products by their location.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $responseOptions Options you can specify for the response. This parameter is null by default.You can primarily use this parameter to return volume price band information in product details, which you can then display on category pages and search results depanding on your theme configuration. To return volume price band information, set this parameter to .
	* @param string $searchSettings The settings to control product search and indexing behavior.
	* @param string $searchTuningRuleCode The unique identifier of the search tuning rule.
	* @param string $searchTuningRuleContext The category ID that the search tuning rule applies to.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function searchAsync($query =  null, $filter =  null, $facetTemplate =  null, $facetTemplateSubset =  null, $facet =  null, $facetFieldRangeQuery =  null, $facetHierPrefix =  null, $facetHierValue =  null, $facetHierDepth =  null, $facetStartIndex =  null, $facetPageSize =  null, $facetSettings =  null, $facetValueFilter =  null, $sortBy =  null, $pageSize =  null, $startIndex =  null, $searchSettings =  null, $enableSearchTuningRules =  null, $searchTuningRuleContext =  null, $searchTuningRuleCode =  null, $facetTemplateExclude =  null, $facetPrefix =  null, $responseOptions =  null, $cursorMark =  null, $responseFields =  null)
	{
		$mozuClient = ProductSearchResultClient::searchClient($query, $filter, $facetTemplate, $facetTemplateSubset, $facet, $facetFieldRangeQuery, $facetHierPrefix, $facetHierValue, $facetHierDepth, $facetStartIndex, $facetPageSize, $facetSettings, $facetValueFilter, $sortBy, $pageSize, $startIndex, $searchSettings, $enableSearchTuningRules, $searchTuningRuleContext, $searchTuningRuleCode, $facetTemplateExclude, $facetPrefix, $responseOptions, $cursorMark, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Suggests possible search terms as the shopper enters search text.
	*
	* @param string $groups Specifies the group that you want this operation to return in the response. This parameter accepts one or more values, separated by comma.For example, if you set this parameter to , then this operation returns a  object that contains suggestions for products that match the user entered characters in the search field.The valid values for this parameter are the following:
*  — Indicates that products should be matched against and returned in the response. The search  value is compared against product name and code. The response contains a  with a name of  and a collection of . Each collection item has a  of Product and contains a  equal to a complete product object.

*  — Indicates that categories should be matched against and returned in the response. The search  value is compared to category name.  The response contains a  with a name of  and a collection of . Each collection item has a  of Category and contains a  equal to a complete category object.

*  — Indicates that previously used search terms (keywords) should be matched against and returned in the response, sorted by frequency of use. Keep in mind that it is not currently possible to edit or remove search terms that may be considered undesirable via the  API. The response contains a  with a name of  and a collection of . Each collection item has a  of Term and contains a  equal to a string value of the matched search term.
The default value is ; however, the  Core Theme only integrates  and ignores the  group.This operation only returns data that is then made available to your theme. If you set this paramter to multiple values,  returns multiple  in the response. Depending on your requirements, you can then customize your theme to display the groups together or as separate lists in the displayed search suggestions.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $query Properties for the product location inventory provided for queries to locate products by their location.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return SearchSuggestionResult 
	* @deprecated deprecated since version 1.17
	*/
	public function suggest($query =  null, $groups =  null, $pageSize =  null, $responseFields =  null)
	{
		$mozuClient = ProductSearchResultClient::suggestClient($query, $groups, $pageSize, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Suggests possible search terms as the shopper enters search text.
	*
	* @param string $groups Specifies the group that you want this operation to return in the response. This parameter accepts one or more values, separated by comma.For example, if you set this parameter to , then this operation returns a  object that contains suggestions for products that match the user entered characters in the search field.The valid values for this parameter are the following:
*  — Indicates that products should be matched against and returned in the response. The search  value is compared against product name and code. The response contains a  with a name of  and a collection of . Each collection item has a  of Product and contains a  equal to a complete product object.

*  — Indicates that categories should be matched against and returned in the response. The search  value is compared to category name.  The response contains a  with a name of  and a collection of . Each collection item has a  of Category and contains a  equal to a complete category object.

*  — Indicates that previously used search terms (keywords) should be matched against and returned in the response, sorted by frequency of use. Keep in mind that it is not currently possible to edit or remove search terms that may be considered undesirable via the  API. The response contains a  with a name of  and a collection of . Each collection item has a  of Term and contains a  equal to a string value of the matched search term.
The default value is ; however, the  Core Theme only integrates  and ignores the  group.This operation only returns data that is then made available to your theme. If you set this paramter to multiple values,  returns multiple  in the response. Depending on your requirements, you can then customize your theme to display the groups together or as separate lists in the displayed search suggestions.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $query Properties for the product location inventory provided for queries to locate products by their location.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function suggestAsync($query =  null, $groups =  null, $pageSize =  null, $responseFields =  null)
	{
		$mozuClient = ProductSearchResultClient::suggestClient($query, $groups, $pageSize, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

