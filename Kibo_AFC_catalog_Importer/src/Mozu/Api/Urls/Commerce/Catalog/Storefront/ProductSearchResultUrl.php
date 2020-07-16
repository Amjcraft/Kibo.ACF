<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Urls\Commerce\Catalog\Storefront;

use Drupal\acf_kibo\Mozu\Api\MozuUrl;
use Drupal\acf_kibo\Mozu\Api\UrlLocation;

class ProductSearchResultUrl  {

	/**
		* Get Resource Url for GetRandomAccessCursor
		* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
		* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
		* @param string $query Properties for the product location inventory provided for queries to locate products by their location.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function getRandomAccessCursorUrl($filter, $pageSize, $query, $responseFields)
	{
		$url = "/api/commerce/catalog/storefront/productsearch/randomAccessCursor/?query={query}&filter={filter}&pageSize={pageSize}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("query", $query);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for Search
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
		* @return string Resource Url
	*/
	public static function searchUrl($cursorMark, $enableSearchTuningRules, $facet, $facetFieldRangeQuery, $facetHierDepth, $facetHierPrefix, $facetHierValue, $facetPageSize, $facetPrefix, $facetSettings, $facetStartIndex, $facetTemplate, $facetTemplateExclude, $facetTemplateSubset, $facetValueFilter, $filter, $pageSize, $query, $responseFields, $responseOptions, $searchSettings, $searchTuningRuleCode, $searchTuningRuleContext, $sortBy, $startIndex)
	{
		$url = "/api/commerce/catalog/storefront/productsearch/search/?query={query}&filter={filter}&facetTemplate={facetTemplate}&facetTemplateSubset={facetTemplateSubset}&facet={facet}&facetFieldRangeQuery={facetFieldRangeQuery}&facetHierPrefix={facetHierPrefix}&facetHierValue={facetHierValue}&facetHierDepth={facetHierDepth}&facetStartIndex={facetStartIndex}&facetPageSize={facetPageSize}&facetSettings={facetSettings}&facetValueFilter={facetValueFilter}&sortBy={sortBy}&pageSize={pageSize}&startIndex={startIndex}&searchSettings={searchSettings}&enableSearchTuningRules={enableSearchTuningRules}&searchTuningRuleContext={searchTuningRuleContext}&searchTuningRuleCode={searchTuningRuleCode}&facetTemplateExclude={facetTemplateExclude}&facetPrefix={facetPrefix}&responseOptions={responseOptions}&cursorMark={cursorMark}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("cursorMark", $cursorMark);
		$url = $mozuUrl->formatUrl("enableSearchTuningRules", $enableSearchTuningRules);
		$url = $mozuUrl->formatUrl("facet", $facet);
		$url = $mozuUrl->formatUrl("facetFieldRangeQuery", $facetFieldRangeQuery);
		$url = $mozuUrl->formatUrl("facetHierDepth", $facetHierDepth);
		$url = $mozuUrl->formatUrl("facetHierPrefix", $facetHierPrefix);
		$url = $mozuUrl->formatUrl("facetHierValue", $facetHierValue);
		$url = $mozuUrl->formatUrl("facetPageSize", $facetPageSize);
		$url = $mozuUrl->formatUrl("facetPrefix", $facetPrefix);
		$url = $mozuUrl->formatUrl("facetSettings", $facetSettings);
		$url = $mozuUrl->formatUrl("facetStartIndex", $facetStartIndex);
		$url = $mozuUrl->formatUrl("facetTemplate", $facetTemplate);
		$url = $mozuUrl->formatUrl("facetTemplateExclude", $facetTemplateExclude);
		$url = $mozuUrl->formatUrl("facetTemplateSubset", $facetTemplateSubset);
		$url = $mozuUrl->formatUrl("facetValueFilter", $facetValueFilter);
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("query", $query);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("responseOptions", $responseOptions);
		$url = $mozuUrl->formatUrl("searchSettings", $searchSettings);
		$url = $mozuUrl->formatUrl("searchTuningRuleCode", $searchTuningRuleCode);
		$url = $mozuUrl->formatUrl("searchTuningRuleContext", $searchTuningRuleContext);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for Suggest
		* @param string $groups Specifies the group that you want this operation to return in the response. This parameter accepts one or more values, separated by comma.For example, if you set this parameter to , then this operation returns a  object that contains suggestions for products that match the user entered characters in the search field.The valid values for this parameter are the following:
*  — Indicates that products should be matched against and returned in the response. The search  value is compared against product name and code. The response contains a  with a name of  and a collection of . Each collection item has a  of Product and contains a  equal to a complete product object.

*  — Indicates that categories should be matched against and returned in the response. The search  value is compared to category name.  The response contains a  with a name of  and a collection of . Each collection item has a  of Category and contains a  equal to a complete category object.

*  — Indicates that previously used search terms (keywords) should be matched against and returned in the response, sorted by frequency of use. Keep in mind that it is not currently possible to edit or remove search terms that may be considered undesirable via the  API. The response contains a  with a name of  and a collection of . Each collection item has a  of Term and contains a  equal to a string value of the matched search term.
The default value is ; however, the  Core Theme only integrates  and ignores the  group.This operation only returns data that is then made available to your theme. If you set this paramter to multiple values,  returns multiple  in the response. Depending on your requirements, you can then customize your theme to display the groups together or as separate lists in the displayed search suggestions.
		* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $query Properties for the product location inventory provided for queries to locate products by their location.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function suggestUrl($groups, $pageSize, $query, $responseFields)
	{
		$url = "/api/commerce/catalog/storefront/productsearch/suggest?query={query}&groups={groups}&pageSize={pageSize}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("groups", $groups);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("query", $query);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
}

?>

