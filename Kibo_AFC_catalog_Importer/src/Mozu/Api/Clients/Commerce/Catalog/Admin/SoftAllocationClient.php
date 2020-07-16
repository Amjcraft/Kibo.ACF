<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Clients\Commerce\Catalog\Admin;

use Drupal\acf_kibo\Mozu\Api\MozuClient;
use Drupal\acf_kibo\Mozu\Api\Urls\Commerce\Catalog\Admin\SoftAllocationUrl;


/**
* The Soft Allocations resource allows you to temporarily hold a product from inventory while a shopper is filling out payment information. You create a product reservation when a shopper proceeds to check out and then release the reservation when the order process is complete.
*/
class SoftAllocationClient {

	/**
	* Retrieves a list of sof allocations according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return MozuClient
	*/
	public static function getSoftAllocationsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = SoftAllocationUrl::getSoftAllocationsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of a soft allocation.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param int $softAllocationId The unique identifier of the soft allocation.
	* @return MozuClient
	*/
	public static function getSoftAllocationClient($softAllocationId, $responseFields =  null)
	{
		$url = SoftAllocationUrl::getSoftAllocationUrl($responseFields, $softAllocationId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new soft allocation for a product. This places a hold on the product inventory for the quantity specified during the ordering process.
	*
	* @param array|SoftAllocation $softAllocationsIn The details of the new soft allocation.
	* @return MozuClient
	*/
	public static function addSoftAllocationsClient($softAllocationsIn)
	{
		$url = SoftAllocationUrl::addSoftAllocationsUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($softAllocationsIn);
		return $mozuClient;

	}
	
	/**
	* Converts a set of existing soft product allocations into product reservations.
	*
	* @param array|SoftAllocation $softAllocations The details of the soft allocation which you want to convert into product reservations.
	* @return MozuClient
	*/
	public static function convertToProductReservationClient($softAllocations)
	{
		$url = SoftAllocationUrl::convertToProductReservationUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($softAllocations);
		return $mozuClient;

	}
	
	/**
	* Updates the expiration time for a set of soft allocations in a non-transactional batch.
	*
	* @param SoftAllocationRenew $softAllocationRenew The details of the soft allocation that you want to renew.
	* @return MozuClient
	*/
	public static function renewSoftAllocationsClient($softAllocationRenew)
	{
		$url = SoftAllocationUrl::renewSoftAllocationsUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($softAllocationRenew);
		return $mozuClient;

	}
	
	/**
	* Updates a soft allocation. This updates a hold on the product inventory for the quantity specified during the ordering process.
	*
	* @param array|SoftAllocation $softAllocations The details of the updated soft allocations.
	* @return MozuClient
	*/
	public static function updateSoftAllocationsClient($softAllocations)
	{
		$url = SoftAllocationUrl::updateSoftAllocationsUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($softAllocations);
		return $mozuClient;

	}
	
	/**
	* Deletes a soft allocation. You might delete a soft allocation when an order or cart is not processed in order to return the product quantity back to inventory.
	*
	* @param int $softAllocationId The unique identifier of the soft allocation.
	*/
	public static function deleteSoftAllocationClient($softAllocationId)
	{
		$url = SoftAllocationUrl::deleteSoftAllocationUrl($softAllocationId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

