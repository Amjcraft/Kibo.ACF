<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Urls\Commerce\Catalog\Admin\Pricelists;

use Drupal\acf_kibo\Mozu\Api\MozuUrl;
use Drupal\acf_kibo\Mozu\Api\UrlLocation;

class PriceListEntryUrl  {

	/**
		* Get Resource Url for GetPriceListEntry
		* @param string $currencyCode The three character ISO currency code, such as USD for US Dollars.
		* @param string $priceListCode The unique code of the price list associated with the price list entry.
		* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @param datetime $startDate The start date of the price list entry.
		* @return string Resource Url
	*/
	public static function getPriceListEntryUrl($currencyCode, $priceListCode, $productCode, $responseFields, $startDate)
	{
		$url = "/api/commerce/catalog/admin/pricelists/{priceListCode}/entries/{productCode}/{currencyCode}?startDate={startDate}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("currencyCode", $currencyCode);
		$url = $mozuUrl->formatUrl("priceListCode", $priceListCode);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("startDate", $startDate);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetPriceListEntries
		* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
		* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
		* @param string $priceListCode The unique code of the price list associated with the price list entry.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
		* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
		* @return string Resource Url
	*/
	public static function getPriceListEntriesUrl($filter, $pageSize, $priceListCode, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/catalog/admin/pricelists/{priceListCode}/entries?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("priceListCode", $priceListCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddPriceListEntry
		* @param string $priceListCode The specified price list to which you want to add the price list entry.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function addPriceListEntryUrl($priceListCode, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/pricelists/{priceListCode}/entries?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("priceListCode", $priceListCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdatePriceListEntry
		* @param string $currencyCode The three character ISO currency code, such as USD for US Dollars.
		* @param string $priceListCode The unique code of the price list associated with the price list entry.
		* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @param datetime $startDate The start date of the price list entry.
		* @return string Resource Url
	*/
	public static function updatePriceListEntryUrl($currencyCode, $priceListCode, $productCode, $responseFields, $startDate)
	{
		$url = "/api/commerce/catalog/admin/pricelists/{priceListCode}/entries/{productCode}/{currencyCode}?startDate={startDate}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("currencyCode", $currencyCode);
		$url = $mozuUrl->formatUrl("priceListCode", $priceListCode);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("startDate", $startDate);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeletePriceListEntry
		* @param string $currencyCode The three character ISO currency code, such as USD for US Dollars.
		* @param string $priceListCode The code of the specified price list associated with the price list entry.
		* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
		* @param datetime $startDate The start date of the price list entry.
		* @return string Resource Url
	*/
	public static function deletePriceListEntryUrl($currencyCode, $priceListCode, $productCode, $startDate)
	{
		$url = "/api/commerce/catalog/admin/pricelists/{priceListCode}/entries/{productCode}/{currencyCode}?startDate={startDate}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("currencyCode", $currencyCode);
		$url = $mozuUrl->formatUrl("priceListCode", $priceListCode);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("startDate", $startDate);
		return $mozuUrl;
	}
	
}

?>

