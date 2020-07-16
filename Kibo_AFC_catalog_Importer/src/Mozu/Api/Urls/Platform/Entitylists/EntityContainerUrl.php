<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Urls\Platform\Entitylists;

use Drupal\acf_kibo\Mozu\Api\MozuUrl;
use Drupal\acf_kibo\Mozu\Api\UrlLocation;

class EntityContainerUrl  {

	/**
		* Get Resource Url for GetEntityContainer
		* @param string $entityListFullName The full name of the EntityList including namespace in name@nameSpace format
		* @param string $id Unique identifier of the customer segment to retrieve.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getEntityContainerUrl($entityListFullName, $id, $responseFields)
	{
		$url = "/api/platform/entitylists/{entityListFullName}/entityContainers/{id}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("entityListFullName", $entityListFullName);
		$url = $mozuUrl->formatUrl("id", $id);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetEntityContainers
		* @param string $entityListFullName The full name of the EntityList including namespace in name@nameSpace format
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
		* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
		* @return string Resource Url
	*/
	public static function getEntityContainersUrl($entityListFullName, $filter, $pageSize, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/platform/entitylists/{entityListFullName}/entityContainers?pageSize={pageSize}&startIndex={startIndex}&filter={filter}&sortBy={sortBy}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("entityListFullName", $entityListFullName);
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
}

?>

