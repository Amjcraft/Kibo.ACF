<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Customer;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Commerce\Customer\VisitUrl;


/**
* Use the Visits resource to manage all visits a customer makes to a tenant's sites and measure the level of transactions a customer performs during a unique visit for customer account analytics. Clients can track customer visits by site (including online and in-person interactions), the transactions a customer performs during the visit, and the device type associated with the visit, if any.
*/
class VisitClient {

	/**
	* Retrieves a list of customer visits according to any filter or sort criteria specified in the request.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return MozuClient
	*/
	public static function getVisitsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = VisitUrl::getVisitsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of the customer visit specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $visitId Unique identifier of the customer visit to update.
	* @return MozuClient
	*/
	public static function getVisitClient($visitId, $responseFields =  null)
	{
		$url = VisitUrl::getVisitUrl($responseFields, $visitId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new visit for the customer account specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Visit $visit Properties of a customer visit to one of a company's sites.
	* @return MozuClient
	*/
	public static function addVisitClient($visit, $responseFields =  null)
	{
		$url = VisitUrl::addVisitUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($visit);
		return $mozuClient;

	}
	
	/**
	* Updates one or more properties of a defined customer visit.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $visitId Unique identifier of the customer visit to update.
	* @param Visit $visit Properties of a customer visit to one of a company's sites.
	* @return MozuClient
	*/
	public static function updateVisitClient($visit, $visitId, $responseFields =  null)
	{
		$url = VisitUrl::updateVisitUrl($responseFields, $visitId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($visit);
		return $mozuClient;

	}
	
	
}

?>

