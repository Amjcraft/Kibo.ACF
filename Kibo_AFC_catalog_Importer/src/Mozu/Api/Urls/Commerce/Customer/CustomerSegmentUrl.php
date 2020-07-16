<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Urls\Commerce\Customer;

use Drupal\acf_kibo\Mozu\Api\MozuUrl;
use Drupal\acf_kibo\Mozu\Api\UrlLocation;

class CustomerSegmentUrl  {

	/**
		* Get Resource Url for GetSegments
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
		* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
		* @return string Resource Url
	*/
	public static function getSegmentsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/customer/segments/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetSegment
		* @param int $id Unique identifier of the customer segment to retrieve.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getSegmentUrl($id, $responseFields)
	{
		$url = "/api/commerce/customer/segments/{id}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("id", $id);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddSegment
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function addSegmentUrl($responseFields)
	{
		$url = "/api/commerce/customer/segments/?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddSegmentAccounts
		* @param int $id Unique identifier of the customer segment to retrieve.
		* @return string Resource Url
	*/
	public static function addSegmentAccountsUrl($id)
	{
		$url = "/api/commerce/customer/segments/{id}/accounts";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("id", $id);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateSegment
		* @param int $id Unique identifier of the customer segment to retrieve.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function updateSegmentUrl($id, $responseFields)
	{
		$url = "/api/commerce/customer/segments/{id}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("id", $id);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteSegment
		* @param int $id Unique identifier of the customer segment to retrieve.
		* @return string Resource Url
	*/
	public static function deleteSegmentUrl($id)
	{
		$url = "/api/commerce/customer/segments/{id}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("id", $id);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for RemoveSegmentAccount
		* @param int $accountId Unique identifier of the customer account.
		* @param int $id Unique identifier of the customer segment to retrieve.
		* @return string Resource Url
	*/
	public static function removeSegmentAccountUrl($accountId, $id)
	{
		$url = "/api/commerce/customer/segments/{id}/accounts/{accountId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("id", $id);
		return $mozuUrl;
	}
	
}

?>

