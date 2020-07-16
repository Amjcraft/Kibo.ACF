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

class SoftAllocationUrl  {

	/**
		* Get Resource Url for GetSoftAllocations
		* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
		* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
		* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
		* @return string Resource Url
	*/
	public static function getSoftAllocationsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/catalog/admin/softallocations/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetSoftAllocation
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @param int $softAllocationId The unique identifier of the soft allocation.
		* @return string Resource Url
	*/
	public static function getSoftAllocationUrl($responseFields, $softAllocationId)
	{
		$url = "/api/commerce/catalog/admin/softallocations/{softAllocationId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("softAllocationId", $softAllocationId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddSoftAllocations
		* @return string Resource Url
	*/
	public static function addSoftAllocationsUrl()
	{
		$url = "/api/commerce/catalog/admin/softallocations/";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ConvertToProductReservation
		* @return string Resource Url
	*/
	public static function convertToProductReservationUrl()
	{
		$url = "/api/commerce/catalog/admin/softallocations/convert";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for RenewSoftAllocations
		* @return string Resource Url
	*/
	public static function renewSoftAllocationsUrl()
	{
		$url = "/api/commerce/catalog/admin/softallocations/renew";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateSoftAllocations
		* @return string Resource Url
	*/
	public static function updateSoftAllocationsUrl()
	{
		$url = "/api/commerce/catalog/admin/softallocations/";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteSoftAllocation
		* @param int $softAllocationId The unique identifier of the soft allocation.
		* @return string Resource Url
	*/
	public static function deleteSoftAllocationUrl($softAllocationId)
	{
		$url = "/api/commerce/catalog/admin/softallocations/{softAllocationId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("softAllocationId", $softAllocationId);
		return $mozuUrl;
	}
	
}

?>

