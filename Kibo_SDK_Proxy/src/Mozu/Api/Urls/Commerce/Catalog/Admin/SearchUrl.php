<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Commerce\Catalog\Admin;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuUrl;
use Drupal\kibo_sdk_proxy\Mozu\Api\UrlLocation;

class SearchUrl  {

	/**
		* Get Resource Url for GetSearchTuningRule
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @param string $searchTuningRuleCode The unique identifier of the search tuning rule.
		* @return string Resource Url
	*/
	public static function getSearchTuningRuleUrl($responseFields, $searchTuningRuleCode)
	{
		$url = "/api/commerce/catalog/admin/search/searchtuningrules/{searchTuningRuleCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("searchTuningRuleCode", $searchTuningRuleCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetSearchTuningRules
		* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
		* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
		* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
		* @return string Resource Url
	*/
	public static function getSearchTuningRulesUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/catalog/admin/search/searchtuningrules?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetSearchTuningRuleSortFields
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function getSearchTuningRuleSortFieldsUrl($responseFields)
	{
		$url = "/api/commerce/catalog/admin/search/searchtuningrulesortfields?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetSettings
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function getSettingsUrl($responseFields)
	{
		$url = "/api/commerce/catalog/admin/search/settings?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetSynonymDefinitionCollection
		* @param string $localeCode The two character country code that sets the locale, such as US for United States. Sites, tenants, and catalogs use locale codes for localizing content, such as translated product text per supported country.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function getSynonymDefinitionCollectionUrl($localeCode, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/search/synonym-definitions/{localeCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("localeCode", $localeCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetSynonymDefinitions
		* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
		* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
		* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
		* @return string Resource Url
	*/
	public static function getSynonymDefinitionsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/catalog/admin/search/synonyms/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetSynonymDefinition
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @param int $synonymId The unique identifier of the synonym definition.
		* @return string Resource Url
	*/
	public static function getSynonymDefinitionUrl($responseFields, $synonymId)
	{
		$url = "/api/commerce/catalog/admin/search/synonyms/{synonymId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("synonymId", $synonymId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddSearchTuningRule
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function addSearchTuningRuleUrl($responseFields)
	{
		$url = "/api/commerce/catalog/admin/search/searchtuningrules?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateSearchTuningRuleSortFields
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function updateSearchTuningRuleSortFieldsUrl($responseFields)
	{
		$url = "/api/commerce/catalog/admin/search/searchtuningrulesortfields?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateSynonymDefinitionCollection
		* @param string $localeCode The two character country code that sets the locale, such as US for United States. Sites, tenants, and catalogs use locale codes for localizing content, such as translated product text per supported country.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function updateSynonymDefinitionCollectionUrl($localeCode, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/search/synonym-definitions/{localeCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("localeCode", $localeCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddSynonymDefinition
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function addSynonymDefinitionUrl($responseFields)
	{
		$url = "/api/commerce/catalog/admin/search/synonyms?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateSearchTuningRule
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @param string $searchTuningRuleCode The unique identifier of the search tuning rule.
		* @return string Resource Url
	*/
	public static function updateSearchTuningRuleUrl($responseFields, $searchTuningRuleCode)
	{
		$url = "/api/commerce/catalog/admin/search/searchtuningrules/{searchTuningRuleCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("searchTuningRuleCode", $searchTuningRuleCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateSettings
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function updateSettingsUrl($responseFields)
	{
		$url = "/api/commerce/catalog/admin/search/settings?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateSynonymDefinition
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @param int $synonymId The unique identifier of the synonym definition.
		* @return string Resource Url
	*/
	public static function updateSynonymDefinitionUrl($responseFields, $synonymId)
	{
		$url = "/api/commerce/catalog/admin/search/synonyms/{synonymId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("synonymId", $synonymId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteSearchTuningRule
		* @param string $searchTuningRuleCode The unique identifier of the search tuning rule.
		* @return string Resource Url
	*/
	public static function deleteSearchTuningRuleUrl($searchTuningRuleCode)
	{
		$url = "/api/commerce/catalog/admin/search/searchtuningrules/{searchTuningRuleCode}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("searchTuningRuleCode", $searchTuningRuleCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteSynonymDefinition
		* @param int $synonymId The unique identifier of the synonym definition.
		* @return string Resource Url
	*/
	public static function deleteSynonymDefinitionUrl($synonymId)
	{
		$url = "/api/commerce/catalog/admin/search/synonyms/{synonymId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("synonymId", $synonymId);
		return $mozuUrl;
	}
	
}

?>

